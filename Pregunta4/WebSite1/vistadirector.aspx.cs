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
using System.Data;

public partial class vistadirector : System.Web.UI.Page
{
    public string[] resultados { get; set; }

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

        reader.Close();

        string sql = "SELECT sum(case when departamento='La Paz' then promedio else 0 end) as LPZ, sum(case when departamento='Oruro' then promedio else 0 end) as ORU, sum(case when departamento='Potosi' then promedio else 0 end) as PTS, sum(case when departamento='Cochabamba' then promedio else 0 end) as CBBA, sum(case when departamento='Santa Cruz' then promedio else 0 end) as STC, sum(case when departamento='Tarija' then promedio else 0 end) as TAR, sum(case when departamento='Pando' then promedio else 0 end) as PND, sum(case when departamento='Beni' then promedio else 0 end) as BENI, sum(case when departamento='Chuquisaca' then promedio else 0 end) as CHQS FROM(SELECT departamento,AVG(ins.notafinal) promedio, Count(ins.notafinal) estudiantes FROM persona per, inscripcion ins WHERE per.ci=ins.ci_estudiante GROUP BY per.departamento) as depto";

        MySqlCommand command = new MySqlCommand(sql, con);
        try
        {
            MySqlDataReader read = command.ExecuteReader();

            int numColumns = read.FieldCount;
            resultados = new string[numColumns];

            if (read.Read())
            {
                for (int i = 0; i < numColumns; i++)
                {
                    resultados[i] = read[i].ToString();
                }
            }

            read.Close();
        }
        catch (MySqlException ex)
        {
            LabelMostrar.Text = ("Error: " + ex.Message);
        }
        finally
        {
            con.Close();
        }

   }
    protected void Button1_Click(object sender, EventArgs e)
    {
        Session.Clear(); 
        Session.Abandon(); 
        Response.Redirect("~/index.aspx");
    }
}