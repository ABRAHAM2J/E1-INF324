namespace WindowsFormsApplication1
{
    partial class Form1
    {
        /// <summary>
        /// Variable del diseñador requerida.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpiar los recursos que se estén utilizando.
        /// </summary>
        /// <param name="disposing">true si los recursos administrados se deben eliminar; false en caso contrario.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código generado por el Diseñador de Windows Forms

        /// <summary>
        /// Método necesario para admitir el Diseñador. No se puede modificar
        /// el contenido del método con el editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.dataGridView1 = new System.Windows.Forms.DataGridView();
            this.label1 = new System.Windows.Forms.Label();
            this.anadir = new System.Windows.Forms.Button();
            this.labelci = new System.Windows.Forms.Label();
            this.labelnombre = new System.Windows.Forms.Label();
            this.labelfecha_nac = new System.Windows.Forms.Label();
            this.labeltelefono = new System.Windows.Forms.Label();
            this.labeldepartamento = new System.Windows.Forms.Label();
            this.ci = new System.Windows.Forms.TextBox();
            this.nombre = new System.Windows.Forms.TextBox();
            this.fecha_nac = new System.Windows.Forms.TextBox();
            this.telefono = new System.Windows.Forms.TextBox();
            this.departamento = new System.Windows.Forms.TextBox();
            this.editar = new System.Windows.Forms.Button();
            this.eliminar = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).BeginInit();
            this.SuspendLayout();
            // 
            // dataGridView1
            // 
            this.dataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView1.Location = new System.Drawing.Point(23, 66);
            this.dataGridView1.Name = "dataGridView1";
            this.dataGridView1.RowTemplate.Height = 24;
            this.dataGridView1.Size = new System.Drawing.Size(726, 376);
            this.dataGridView1.TabIndex = 0;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(33, 32);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(155, 17);
            this.label1.TabIndex = 1;
            this.label1.Text = "TABLA DE PERSONAS";
            // 
            // anadir
            // 
            this.anadir.Location = new System.Drawing.Point(573, 464);
            this.anadir.Name = "anadir";
            this.anadir.Size = new System.Drawing.Size(152, 60);
            this.anadir.TabIndex = 2;
            this.anadir.Text = "AÑADIR NUEVA PERSONA";
            this.anadir.UseVisualStyleBackColor = true;
            this.anadir.Click += new System.EventHandler(this.anadir_Click);
            // 
            // labelci
            // 
            this.labelci.AutoSize = true;
            this.labelci.Location = new System.Drawing.Point(199, 479);
            this.labelci.Name = "labelci";
            this.labelci.Size = new System.Drawing.Size(24, 17);
            this.labelci.TabIndex = 3;
            this.labelci.Text = "CI:";
            // 
            // labelnombre
            // 
            this.labelnombre.AutoSize = true;
            this.labelnombre.Location = new System.Drawing.Point(70, 523);
            this.labelnombre.Name = "labelnombre";
            this.labelnombre.Size = new System.Drawing.Size(153, 17);
            this.labelnombre.TabIndex = 4;
            this.labelnombre.Text = "NOMBRE COMPLETO:";
            // 
            // labelfecha_nac
            // 
            this.labelfecha_nac.AutoSize = true;
            this.labelfecha_nac.Location = new System.Drawing.Point(55, 568);
            this.labelfecha_nac.Name = "labelfecha_nac";
            this.labelfecha_nac.Size = new System.Drawing.Size(168, 17);
            this.labelfecha_nac.TabIndex = 5;
            this.labelfecha_nac.Text = "FECHA DE NACIMIENTO:";
            // 
            // labeltelefono
            // 
            this.labeltelefono.AutoSize = true;
            this.labeltelefono.Location = new System.Drawing.Point(136, 612);
            this.labeltelefono.Name = "labeltelefono";
            this.labeltelefono.Size = new System.Drawing.Size(87, 17);
            this.labeltelefono.TabIndex = 6;
            this.labeltelefono.Text = "TELEFONO:";
            // 
            // labeldepartamento
            // 
            this.labeldepartamento.AutoSize = true;
            this.labeldepartamento.Location = new System.Drawing.Point(96, 662);
            this.labeldepartamento.Name = "labeldepartamento";
            this.labeldepartamento.Size = new System.Drawing.Size(127, 17);
            this.labeldepartamento.TabIndex = 7;
            this.labeldepartamento.Text = "DEPARTAMENTO:";
            // 
            // ci
            // 
            this.ci.Location = new System.Drawing.Point(241, 479);
            this.ci.Name = "ci";
            this.ci.Size = new System.Drawing.Size(233, 22);
            this.ci.TabIndex = 8;
            // 
            // nombre
            // 
            this.nombre.Location = new System.Drawing.Point(241, 523);
            this.nombre.Name = "nombre";
            this.nombre.Size = new System.Drawing.Size(233, 22);
            this.nombre.TabIndex = 9;
            // 
            // fecha_nac
            // 
            this.fecha_nac.Location = new System.Drawing.Point(241, 568);
            this.fecha_nac.Name = "fecha_nac";
            this.fecha_nac.Size = new System.Drawing.Size(233, 22);
            this.fecha_nac.TabIndex = 10;
            // 
            // telefono
            // 
            this.telefono.Location = new System.Drawing.Point(241, 612);
            this.telefono.Name = "telefono";
            this.telefono.Size = new System.Drawing.Size(233, 22);
            this.telefono.TabIndex = 11;
            // 
            // departamento
            // 
            this.departamento.Location = new System.Drawing.Point(241, 662);
            this.departamento.Name = "departamento";
            this.departamento.Size = new System.Drawing.Size(233, 22);
            this.departamento.TabIndex = 12;
            // 
            // editar
            // 
            this.editar.Location = new System.Drawing.Point(573, 552);
            this.editar.Name = "editar";
            this.editar.Size = new System.Drawing.Size(152, 61);
            this.editar.TabIndex = 13;
            this.editar.Text = "EDITAR PERSONA";
            this.editar.UseVisualStyleBackColor = true;
            this.editar.Click += new System.EventHandler(this.editar_Click);
            // 
            // eliminar
            // 
            this.eliminar.Location = new System.Drawing.Point(573, 645);
            this.eliminar.Name = "eliminar";
            this.eliminar.Size = new System.Drawing.Size(152, 57);
            this.eliminar.TabIndex = 14;
            this.eliminar.Text = "ELIMINAR PERSONA";
            this.eliminar.UseVisualStyleBackColor = true;
            this.eliminar.Click += new System.EventHandler(this.eliminar_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(779, 714);
            this.Controls.Add(this.eliminar);
            this.Controls.Add(this.editar);
            this.Controls.Add(this.departamento);
            this.Controls.Add(this.telefono);
            this.Controls.Add(this.fecha_nac);
            this.Controls.Add(this.nombre);
            this.Controls.Add(this.ci);
            this.Controls.Add(this.labeldepartamento);
            this.Controls.Add(this.labeltelefono);
            this.Controls.Add(this.labelfecha_nac);
            this.Controls.Add(this.labelnombre);
            this.Controls.Add(this.labelci);
            this.Controls.Add(this.anadir);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.dataGridView1);
            this.Name = "Form1";
            this.Text = "Form1";
            this.Load += new System.EventHandler(this.Form1_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.DataGridView dataGridView1;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button anadir;
        private System.Windows.Forms.Label labelci;
        private System.Windows.Forms.Label labelnombre;
        private System.Windows.Forms.Label labelfecha_nac;
        private System.Windows.Forms.Label labeltelefono;
        private System.Windows.Forms.Label labeldepartamento;
        private System.Windows.Forms.TextBox ci;
        private System.Windows.Forms.TextBox nombre;
        private System.Windows.Forms.TextBox fecha_nac;
        private System.Windows.Forms.TextBox telefono;
        private System.Windows.Forms.TextBox departamento;
        private System.Windows.Forms.Button editar;
        private System.Windows.Forms.Button eliminar;
    }
}

