
<?php
    class HomeController
    {
        public function index()
        {
            $data['title'] = " Home  ";
            $data['content'] = " Content of Home  ";
            VIEW::load('home', $data);
        }
    }
?>