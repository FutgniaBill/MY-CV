<?php
    class Exper_prof{

        public function __construct($title_post,$enterprise ,$year,$realized_proj)
        {
            $this->title_post=$title_post;
            $this->enterprise=$enterprise;
            $this->year=$year;
            $this->realized_proj=$realized_proj;
        }
        public function get_Exper_prof(){
            echo ' 
                    <div class="expertise_detail">
                        <div class="work_post" id="arange_text">'.$this->title_post.''.'<b>'.$this->enterprise.'</div>
                        <div class="work_periode" id="arange_text" style="color: blue;">'.$this->year.'</div>
                        <div class="work_realize" id="arange_text">'.$this->realized_proj.'</div>
                        <div class="barre_division" >
                            <hr color="#f0f0f0">
                        </div>  
                    </div>
               ';
        }
       
}

?>