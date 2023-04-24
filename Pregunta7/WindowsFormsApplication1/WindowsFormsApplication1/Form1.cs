using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApplication1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            ServiceReference1.WebServiceSoapClient sw = new ServiceReference1.WebServiceSoapClient();
            dataGridView1.DataSource = sw.Listar_Persona().Tables[0];
        }

        private void anadir_Click(object sender, EventArgs e)
        {
            ServiceReference1.WebServiceSoapClient sw = new ServiceReference1.WebServiceSoapClient();

            // Insertar nueva persona
            sw.Crear_Persona(ci.Text, nombre.Text, fecha_nac.Text, telefono.Text, departamento.Text);
            DataTable dt2 = new DataTable();
            dt2 = dataGridView1.DataSource as DataTable;

            // Añadir la nueva fila al DataGridView
            DataRow datarow;
            datarow = dt2.NewRow();
            datarow["ci"] = ci.Text;
            datarow["nombre"] = nombre.Text;
            datarow["fecha_nac"] = fecha_nac.Text;
            datarow["telefono"] = telefono.Text;
            datarow["departamento"] = departamento.Text;
            dt2.Rows.Add(datarow);

            // Limpiar los campos de entrada de datos
            ci.Text = "";
            nombre.Text = "";
            fecha_nac.Text = "";
            telefono.Text = "";
            departamento.Text = "";

        }

        private void editar_Click(object sender, EventArgs e)
        {
            int rowIndex = dataGridView1.SelectedCells[0].RowIndex;

            // Obtener los nuevos valores de los campos
            string nuevaCi = ci.Text;
            string nuevoNombre = nombre.Text;
            string nuevaFechaNac = fecha_nac.Text;
            string nuevoTelefono = telefono.Text;
            string nuevoDepartamento = departamento.Text;

            // Actualizar los datos en el servidor
            ServiceReference1.WebServiceSoapClient sw = new ServiceReference1.WebServiceSoapClient();
            sw.Actualizar_Persona(nuevaCi, nuevoNombre, nuevaFechaNac, nuevoTelefono, nuevoDepartamento);

            // Actualizar los datos en la fila seleccionada del DataGridView
            dataGridView1.Rows[rowIndex].Cells["ci"].Value = nuevaCi;
            dataGridView1.Rows[rowIndex].Cells["nombre"].Value = nuevoNombre;
            dataGridView1.Rows[rowIndex].Cells["fecha_nac"].Value = nuevaFechaNac;
            dataGridView1.Rows[rowIndex].Cells["telefono"].Value = nuevoTelefono;
            dataGridView1.Rows[rowIndex].Cells["departamento"].Value = nuevoDepartamento;

            // Limpiar los campos de entrada de datos
            ci.Text = "";
            nombre.Text = "";
            fecha_nac.Text = "";
            telefono.Text = "";
            departamento.Text = "";
        }

        private void eliminar_Click(object sender, EventArgs e)
        {
            // Obtener la fila seleccionada
            DataGridViewRow row = dataGridView1.SelectedRows[0];

            // Obtener el valor de la columna que contiene la clave primaria
            string ci = row.Cells["ci"].Value.ToString();

            // Llamar al método para eliminar la persona con la clave primaria seleccionada
            ServiceReference1.WebServiceSoapClient sw = new ServiceReference1.WebServiceSoapClient();
            sw.Eliminar_Persona(ci);

            // Remover la fila seleccionada del DataGridView
            dataGridView1.Rows.Remove(row);
        }


    }
}
