using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;
using MySql.Data.MySqlClient;
using System.Data;

/// <summary>
/// Descripción breve de WebService
/// </summary>
[WebService(Namespace = "http://tempuri.org/")]
[WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
// Para permitir que se llame a este servicio web desde un script, usando ASP.NET AJAX, quite la marca de comentario de la línea siguiente. 
// [System.Web.Script.Services.ScriptService]
public class WebService : System.Web.Services.WebService {

    public WebService () {

        //Elimine la marca de comentario de la línea siguiente si utiliza los componentes diseñados 
        //InitializeComponent(); 
    }

    [WebMethod]
    public DataSet Listar_Persona()
    {
        string sConnectionString;
        sConnectionString = "server=localhost; port=3306; database=mibaseabraham; uid=root; password=''";
        MySqlConnection con = new MySqlConnection(sConnectionString);
        con.Open();
        MySqlDataAdapter da = new MySqlDataAdapter("SELECT * FROM persona", con);
        DataSet ds = new DataSet("persona");
        da.FillSchema(ds, SchemaType.Source, "persona");
        da.Fill(ds, "persona");
        con.Close();
        return ds;
    }

    [WebMethod]
    public bool Crear_Persona(string ci, string nombre, string fecha_nac, string telefono, string departamento)
    {
        string sConnectionString;
        sConnectionString = "server=localhost; port=3306; database=mibaseabraham; uid=root; password=''";
        MySqlConnection con = new MySqlConnection(sConnectionString);

        MySqlCommand cmd = new MySqlCommand();
        cmd.Connection = con;
        cmd.CommandText = "INSERT INTO PERSONA (ci, nombre, fecha_nac, telefono, departamento) " +
                          "VALUES (@ci, @nombre, @fecha_nac, @telefono, @departamento)";

        // Add the parameters for the InsertCommand.
        cmd.Parameters.AddWithValue("@ci", ci);
        cmd.Parameters.AddWithValue("@nombre", nombre);
        cmd.Parameters.AddWithValue("@fecha_nac", fecha_nac);
        cmd.Parameters.AddWithValue("@telefono", telefono);
        cmd.Parameters.AddWithValue("@departamento", departamento);

        con.Open();
        cmd.ExecuteNonQuery();
        con.Close();

        return true;
    }

    [WebMethod]
    public bool Actualizar_Persona(string ci, string nombre, string fecha_nac, string telefono, string departamento)
    {
        string sConnectionString;
        sConnectionString = "server=localhost; port=3306; database=mibaseabraham; uid=root; password=''";
        MySqlConnection con = new MySqlConnection(sConnectionString);

        MySqlCommand cmd = new MySqlCommand();
        cmd.Connection = con;
        cmd.CommandText = "UPDATE PERSONA SET nombre = @nombre, fecha_nac = @fecha_nac, telefono = @telefono, departamento = @departamento " +
                          "WHERE ci = @ci";

        cmd.Parameters.AddWithValue("@nombre", nombre);
        cmd.Parameters.AddWithValue("@fecha_nac", fecha_nac);
        cmd.Parameters.AddWithValue("@telefono", telefono);
        cmd.Parameters.AddWithValue("@departamento", departamento);
        cmd.Parameters.AddWithValue("@ci", ci);

        con.Open();
        cmd.ExecuteNonQuery();
        con.Close();

        return true;
    }

    [WebMethod]
    public bool Eliminar_Persona(string ci)
    {
        string sConnectionString;
        sConnectionString = "server=localhost; port=3306; database=mibaseabraham; uid=root; password=''";
        MySqlConnection con = new MySqlConnection(sConnectionString);

        MySqlCommand cmd = new MySqlCommand();
        cmd.Connection = con;
        cmd.CommandText = "DELETE FROM PERSONA WHERE ci = @ci";
        cmd.Parameters.AddWithValue("@ci", ci);

        con.Open();
        cmd.ExecuteNonQuery();
        con.Close();

        return true;
    }
    
}
