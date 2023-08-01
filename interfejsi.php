<?php 
interface ImojInterfejs
{
    // metodi i konstante
    // 

    const INTERFEJS_KONSTANTA_1 = 1;
   const INTERFEJS_KONSTANTA_2 = 'string';

   public function metoda_1();
   public function metoda_2();

} 

class mojaKlasa implements ImojInterfejs
{
   public function metoda_1()
   {
       // Implementiranje metoda_1
   }
   public function metoda_2()
   {
       // Implementiranje metoda_2
   }
}

?>