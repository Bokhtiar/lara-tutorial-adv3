<?php
    namespace App\ItSolution;
    class DemoClass {
        public function productImagePath($image_name)
        {
            return public_path('images/products/'.$image_name);
        }
        public function changeDateFormate($date,$date_format){
            return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)
                        ->format($date_format);
        }
    }
?>
