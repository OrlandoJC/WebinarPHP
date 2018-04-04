<?php

class html
  {
    public function cabeza($titulo='Sin titulo')
      {
        echo "<!DOCTYPE html><html><head>";
        echo "<title>$titulo</title>";
        //
        // TAREA
        //
        //Que se muestre un alert con javascript
        echo "<script> alert('hola') </script>";
        //
        // TAREA
        //
      
          //Todo el contenido de html del head
        echo "</head>";
      }
     public function abriCuerpo()
     {
       echo "<body>";
     }
     public function cerrarcuerpo()
     {
       echo "</body>";
     }
     public function pie()
     {
       echo "</html>";
     }
  }
class MiClase
{
  private $nombreObjeto = 'objeto vacio';
  public function __construct()
    {
        //echo "se creo el objeto";    
    }
  public function modificaNombre($nuevoNombre)
  {
    echo "El nombre anterior es: ".$this->nombreObjeto;
    $this->nombreObjeto=$nuevoNombre;
    echo "El nuevo nombre es: ".$this->regresarNombre()."<br />";
    
  }
  public function regresarNombre()
  {
    return $this->nombreObjeto;
  }
}
//Termina mis clases
$objetohtml = new html();
$objetohtml->cabeza("Alert");
$objetohtml->abriCuerpo();

$miObjeto1 = new MiClase();
$miObjeto2 = new MiClase();
$miObjeto3 = new MiClase();
$miObjeto4 = new MiClase();
$miObjeto5 = new MiClase();

$miObjeto1->modificaNombre("objeto UNO :)");
$miObjeto2->modificaNombre("objeto DOS :)");
$miObjeto3->modificaNombre("objeto TRES ;)");
$miObjeto4->modificaNombre("objeto CUATRO :)");
$miObjeto5->modificaNombre("objeto CINCO :)");

$objetohtml->cerrarcuerpo();
$objetohtml->pie();
