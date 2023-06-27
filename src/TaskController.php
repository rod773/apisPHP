<?php

class TaskController
{

    public function processRequest($method, $id)
    {


        if ($id == null) {

            if ($method == "GET") {
                echo "index";
            }

            else if ($method == "POST") {
                echo "create";
            }
            else{
                http_response_code(405);
                header("Allow: GET,POST");
            }
        } else {

            switch ($method) {

                case "GET":
                    echo "list $id";
                    break;

                case "PATCH":
                    echo "update $id";
                    break;

                case "DELETE":
                    echo "delete $id";
                    break;
            }
        }
    }
}