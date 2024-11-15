<?php
use App\Models\EducationModel;
require_once(MODEL_PATH . "/EducationModel.php");

define("EDUCATION_ICONS", ASSETS_PATH . "/images/education_icons");

$educations = array(
    new EducationModel(
        "Secondary School No. 11",
        EDUCATION_ICONS . "/kuzbass.png",
        "My primary school, where I spent time from 1st to 10th grade. It was here that I got the basic knowledge of the subjects",
        "Kemerovo",
        "September, 2011",
        "May, 2021"
    ),
    new EducationModel(
        "Svetozar Marković Gymnasium",
        EDUCATION_ICONS . "/svetozar.png",
        "My secondary school, where I spent two years and obtained my high school education. During this time, I deepened my understanding of core subjects and prepared for future academic endeavors.",
        "Subotica",
        "October, 2021",
        "June, 2023"
    ),
    new EducationModel(
        "Subotica Tech - College of Applied Sciences",
        EDUCATION_ICONS . "/vts.png",
        "I am currently pursuing a Bachelor's degree in Computer Science at Subotica Tech - College of Applied Sciences, Serbia. I have taken courses in Data Structures, Algorithms, Object-Oriented Programming, Database Management Systems, Operating Systems, and Computer Networks, among others.",
        "Subotica",
        "October, 2023"
    )
)
?>