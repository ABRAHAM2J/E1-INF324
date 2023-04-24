using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using MySql.Data;
using MySql.Data.MySqlClient;
using System.Configuration;
using System.Text;

public partial class inicio : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        string ci = Session["ci"].ToString();

        MySqlConnection con = new MySqlConnection("server=localhost; port=3306; database=mibaseabraham; uid=root; password=''");
        con.Open();

        string query = "SELECT nombre FROM PERSONA WHERE ci = @ci";

        MySqlCommand cmd = new MySqlCommand(query, con);
        cmd.Parameters.AddWithValue("@ci", ci);
        MySqlDataReader reader = cmd.ExecuteReader();

        if (reader.Read())
        {
            string nombre = reader.GetString("nombre");
            string rol = "";
            if (Session["rol"] != null)
            {
                rol = Session["rol"].ToString();
                LabelRol.Text = rol + ": " + nombre;
            }
        }
        else
        {
            LabelRol.Text = "No se encontró ninguna persona con CI: " + ci;
        }

        con.Close();
    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        Session.Clear();
        Session.Abandon();
        Response.Redirect("~/index.aspx");
    }
}