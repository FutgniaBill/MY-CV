<?php


class Loisir{

    public $element;


    public function __construct($element)
    {
         $this->element=$element;
    }

   

    public function getLoisir(){
        echo '
        <img src="'.$this->element.'" alt=" " class="pleasureImage ">
        ';
    }
    public function getLoisirPreview(){
        echo '
        <img src="../'.$this->element.'" alt=" " class="pleasureImage ">
        ';
    }

}

 

$elements=[
    new Loisir('img/l1.png'),
    new Loisir('img/l2.png'),
    new Loisir('img/l3.png'),
    new Loisir('img/l4.png'),
    new Loisir('img/l5.png'),
    new Loisir('img/l6.png'),
    new Loisir('img/l7.png'),
    new Loisir('img/l2.png'),
    new Loisir('img/l7.png')
];
    
?>