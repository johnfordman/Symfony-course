<?php
    namespace HeticBundle\Services;

    class CalculateAge
    {
        public function calculate(\DateTime $date)
        {
             $dateActual = new \DateTime();
             $results = $dateActual->diff($date)->format('%y');
            return $results;
        }
    }
   