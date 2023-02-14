<?php
    class post{
        private $id;
        private $image; 
        private $title;
        private $description;
        private $date;


// parametrage est Post
        public function __construct($id,$image,$title,$description,$date)
        {
            $this->id=$id;
            $this->image=$image;
            $this->title=$title;
            $this->description=$description;
            $this->date=$date;

        }
        // Getter et setter
        public function getId(){return $this->id;}
        public function setId($id){$this->id=$id;}

        public function getimage(){return $this->image;}
        public function setimage($image){$this->image = $image;}
        
        public function gettitle(){return $this->title;}
        public function settitle($title){$this->title=$title;}

        public function getdescription(){return $this->description;}
        public function setdescription($description){$this->description=$description;}

        public function getdate(){return $this->date;}
        public function setdate($date){$this->date=$date;}


    }