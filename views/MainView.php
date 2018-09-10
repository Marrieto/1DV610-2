<?php
    class MainView 
    {
        // Return the main view with it's inputs
        public function renderHTML (FormView $formView, $translatedViewText) {
            echo "
            " . $formView->returnForm() . "
            " . $translatedViewText . "
            ";
        }
    }