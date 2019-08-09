<?php if ($summary>0 && $summary<=100) {
                echo "color: [
                [0.49, '#ff4500'],
                [0.74, '#ffcc00'],
                [1, 'lightgreen']
              ],";
              }elseif ($summary>100 || $summary<=500) {
                echo "color: [
                [2.49, '#ff4500'],
                [3.74, '#ffcc00'],
                [5, 'lightgreen']
              ],";
              }elseif ($summary>500 || $summary<=1000) {
                echo "color: [
                [4.9, '#ff4500'],
                [7.4, '#ffcc00'],
                [10, 'lightgreen']
              ],";
              } ?>