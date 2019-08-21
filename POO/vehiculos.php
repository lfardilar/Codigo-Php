 <?php

		class Coche{

			protected $ruedas; //encapsulamiento
			var $color;
			protected $motor;

			function Coche(){ // Metodo Construtor

				$this->ruedas = 4;
				$this->color = "";
				$this->motor = 1600;
			}

			function arrancar(){

				echo "Estoy Arrancando<br>";
			}
			function girar(){

				echo "Estoy Girando<br>";
			}
			function frenar(){
				echo "Estoy Frenando<br>";
			}
			function establece_color($color_coche,$nombre_coche){
				$this->color=$color_coche;
				$this->nombre=$nombre_coche;
				echo "El color de ".$this->nombre." es: ". $this->color."<br>";
			}

      function get_ruedas(){
          return $this->ruedas;
      }
      function get_motor(){
         return $this->motor;
      }

		}



		class Camiones extends Coche{

			function Camiones(){ // Metodo Construtor

				$this->ruedas = 8;
				$this->color = "gris";
				$this->motor = 2600;
			}

			function set_color($color_camion,$nombre_camion){
				$this->color=$color_camion;
				$this->nombre=$nombre_camion;
				echo "El color de ".$this->nombre." es: ". $this->color."<br>";
			}

			function arrancar(){
				parent::arrancar();
				echo 'Camion arracado';
			}


		}



     ?>
