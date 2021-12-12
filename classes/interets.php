<?php 
 class interets{

    public function __construct($img)
    {
        $this->img=$img;
    }
    public function get_interets(){
            echo ' 
                    <div class="det1">
                        <img src='.$this->img.' alt="">
                        <img src=.'.$this->img.' alt="">
                        <img src=.'.$this->img.' alt="">
                    </div>
                    <div class="det2">
                        <img src=.'.$this->img.' alt="">
                        <img src=.'.$this->img.' alt="">
                        <img src=.'.$this->img.' alt="">
                    </div>
               ';
        }
 }

?>