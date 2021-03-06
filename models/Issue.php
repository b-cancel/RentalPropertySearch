<?php

use Base\Issue as BaseIssue;

/**
 * Skeleton subclass for representing a row from the 'issue' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Issue extends BaseIssue
{
    public function getId(){
        return $this->getIssuenumberid();
    }

    public function getIssue(){
        $name = $this->getName();
        $description = $this->getDetails();

        $fullIssue = $name;
        if($description){
            $fullIssue = $fullIssue . " | " . $description;
        }

        return $fullIssue;
    }
}
