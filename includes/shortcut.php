<?php
                $content = "My name is Luka. I live on the second floor. I live upstairs from you. Yes I think you've seen me before. ";
                $dot = ".";

                $position = stripos($content, $dot); //find first dot position

                if ($position) { //if there's a dot in our soruce text do
                  $offset = $position + 1; //prepare offset
                  $position2 = stripos($content, $dot, $offset); //find second dot using offset
                  $first_two = substr($content, 0, $position2); //put two first sentences under $first_two

                  echo $first_two . '.'; //add a dot
                } else {  //if there are no dots
                  //do nothing
                }
