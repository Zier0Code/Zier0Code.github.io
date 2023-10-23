<?php
    $name = "April Angelo Avila";
    $careerTitle = array('Jr. Data Analyst');
    
    $education = array(
        "Primary" => "De Castro Elementary School",
        "JuniorHigh" => "Sta. Lucia High School",
        "SeniorHigh" => "Rizal Technological University",
        "AwardsHS"   => "Academic Achiever With Honors",
        "Tertiary" => "System Technological Institute",
    );
   
    $skills=array(
        "HTML",
        "CSS",
        "Javascript",
        "Python",
        "PHP",
        "Familiarity with SQL and databases ",
        // "Laravel",
        // "ReactJS",
        "Solid verbal and written communication skills",
        "Ability to work in a team",
        "Proficiency with spreadsheets, such as Excel",
        "Problem Solving Skills",
        "Demonstrated Attention to detail",
        // "Machine Learning",
        "Familiarity with visualization tools and presentations"
    );

    $contact = array(
        "email" => "angeloavila030@gmail.com",
        "contactNo" => "+639569513721",
        "address" => "D1 5th st.
                    Morales Compound Sta.Lucia 
                    Pasig City"
    );

    $primaryYear = array(
        "started" => "2007",
        "finished" => "2013"
    );
    $juniorYear = array(
        "started" => $primaryYear["finished"],
        "finished" => "2017"
    );
    $seniorYear = array(
        "started" => $juniorYear['finished'],
        "finished" => "2019"
    );
    $tertiaryYear = array(
        "started" => "2021",
        "finished" => "present"
    );
    
    $expsInfo = array(
        "role" => $careerTitle[0],
        "company" => "Exceed Philippines DS Bootcamp",
        "year" => array(
            "Started" => "2022",
            "Ended" => "2023"
        ),
        "Experiences" => array(
            "Learned Data Extracting , Data Visualization, Data Cleaning, Data Scaling, Classification Modeling, Regression Modeling, Clustering,
            Ensemble Modeling , Data Boosting, Researching, Different Methodologies, Cloud Services, Logistics Regression, KNN,
            Decision Tree Classifier, Naive Bayes.",
            "Lead the Click Through Rate Prediction Case Study using Classification Modeling in Advertisement company
            and Technologies to help them target most possible visitors who are most likely to respond in the ads.",
            "Lead the Clustering Case Study to help Mall/Shopping Store target the most possible visitors who are likely to buy 
            their products.
            ",
            "Build Different Model Algorithms and get the Accuracy Score in the data set of insurance Claims"
        )
    );
    $certificates = array(
        "DataScience" => array(
            "Machine Learning-Regression Track \n using Python",
            "Data Analysis Track using Python",
            "Data Science Bootcamp Graduate"
        ),
        "FullStackWeb" => array()
    );

    $referencesInfo = array(
        "reference1" => array(
            "name" => "Aries Jayvee Ganzon",
            "company-role" => "Co-founder and Data Science Lead of Exceed Philippines",
            "phone" => "09564186175",
            "email" => "ariesjayveeganzon@gmail.com"
        )
    )

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resume</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
        <style>       
            *{
                box-sizing:border-box;
                margin:0;
            }
            body{
                padding:2rem
            }
            .material-symbols-outlined {
                font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
            }
            .contact-content,
            .educ-content,
            .educ-content-1,
            .name-contact-box{
                display:flex;
                
            }
            .contact-content > p{
                margin:0;
                margin-left:.5rem;
            }
            .educ-content,
            .educ-content-1{
                justify-content:space-between;
                margin-right:2rem;
                margin-left:2rem;
            }
            .name-contact-box{
                justify-content:space-around;
            }
            .educ-content > ul,
            .educ-content-1 > ul,
            .educ-content-1 > p,
            h4
            {
                list-style-type:none;
                margin-top:.5rem;
            }
            .educ-content-multiple{
                display:flex;
                flex-direction:column;
            }
            .list-1{
                margin:0;
            }
            h3{
                margin:.5rem;
            }
            h1{
                text-align:center;
            }
            h2{
                font-size:3rem;
            }
            .container{
                margin-top:3rem;
            }
            .name-container{
                flex-basis:70%;
                text-align:center;
                padding-top:1.5rem;
            }
            .objective-container,
            .education-container,
            .skills-container,
            .experiences-container,
            .certificates-container
            {
                border-bottom:.05rem solid black;
                margin-bottom:1rem;
                padding-bottom:1rem;
            }
            .objective-container{
                text-align:center;
            }
            .education-box,
            .skills-content,
            .experiences-content,
            .indent-list{

                margin-left:7rem;
                margin-right:2rem;
            }
            .experiences-content > ul > li,
            .certificates-container > ul > li,
            .references-container > .indent-list{
                letter-spacing:.05rem;
                line-height:1.5rem;
                margin-bottom:.9rem;
            }    
            .skills-container > ul > li,
            {
                letter-spacing:.05rem;
                line-height:1rem;
                margin-bottom:.5rem;
            } 
            .skills-container > ul{
                display:flex;
                justify-content:space-between;
                flex-wrap:wrap;
            }
            .skills-container > ul > li {
                margin-top:1rem;
                margin-left:2rem;
            }
            
            @media only screen and (min-width: 1200px) {
                body{
                    padding:5rem 20rem 8rem 20rem;
                }
            } 
        
            @media only screen and (min-width: 3000px) {
                body{
                    padding:5rem 70rem 8rem 70rem;
                }
            } 
            
            @media only screen and (max-width: 667px) {
                .name-contact-box{
                    display:grid;
                    row-gap:2rem;
                }
                .contact-container{
                    text-align:left;
                }
                .container{
                    display:grid;
                    row-gap:1rem;
                }
                .education-box,
                .skills-content,
                .experiences-content{
                margin-left:2rem;
                margin-right:1rem;
                }  
            }

        </style>
        <h1>Resume</h1>
        <div class="container">
            <div class="name-contact-box">
                <div class="name-container">
                    <h2>
                        <?= $name ?>
                    </h2>
                    <p>
                       <i>( <?= $careerTitle[0] ?> )</i>
                    </p>
                </div>
                <div class="contact-container">
                    <h3>CONTACT</h3>
                    <div class="contact-content">
                        <span class="material-symbols-outlined">
                            mail
                        </span> 
                        <p>
                            <?= $contact["email"] ?>
                        </p>
                    </div>
                    <div class="contact-content">
                        <span class="material-symbols-outlined">
                            call
                        </span>
                        <p>
                            <?= $contact["contactNo"] ?>
                        </p>
                    </div>
                    <div class="contact-content">
                        <span class="material-symbols-outlined">
                            home
                        </span> 
                        <p>
                            <?= $contact["address"] ?>
                        </p>
                    </div>  
                </div>  
            </div>     
            <div class="objective-container">
                <h3>OBJECTIVE</h3>
                <p>
                    To become associated with a company where I can practice <br>
                    my knowledge and utilize my skills while enhancing <br>
                    the company’s productivity and reputation.
                </p>    
            </div>
            <div class="education-container">
                <h3>EDUCATIONAL ATTAINMENT</h3>
                <div class='education-box'>
                    <h4>PRIMARY:</h4>
                    <div class='educ-content'>
                        <ul>
                            <li>
                                <?= $education['Primary'] ?>
                            </li>
                        </ul>
                        <p class='year'>
                            <?= $primaryYear["started"]  ." - ". $primaryYear["finished"] ?>
                        </p>
                    </div>
                    <h4>SECONDARY:</h4>
                    <div class='educ-content-multiple'>
                        <div class='educ-content-1'>
                            <ul>
                                <li>
                                <?= $education["JuniorHigh"] ?> <br>
                                Junior High School Completer
                                <ul>
                                        <li class='list-1'>
                                            <?= 
                                                $education["AwardsHS"]
                                            ?>
                                        </li>
                                </ul>
                                </li>
                            </ul>
                            <p class='year'>
                                <?= $juniorYear["started"]  ." - ". $juniorYear["finished"] ?>
                            </p>
                        </div>
                        <div class="educ-content-1">
                            <ul>
                                <li>
                                    <?= $education["SeniorHigh"] ?><br>
                                    Senior High School Completer
                                </li>
                                <ul>
                                        <li class='list-1'>
                                            <?= 
                                                $education["AwardsHS"]
                                            ?>
                                        </li>
                                </ul>
                            </ul>
                            <p class='year'>
                                <?= $seniorYear["started"]  ." - ". $seniorYear["finished"] ?>
                            </p>
                        </div>
                    </div>
                    <h4>TERTIARY:</h4>
                    <div class='educ-content'>
                        <ul>
                            <li>
                                <?= $education['Tertiary'] ?>
                            </li>
                        </ul>
                        <p class='year'>
                            <?= $tertiaryYear["started"]  ." - ". $tertiaryYear["finished"] ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="skills-container">
                <h3>SKILLS</h3>
                <ul class="indent-list">
                    <?php
                        for($i = 0; $i < count($skills) ;$i++){
                        //echo "<li> " . $skills[$i]. " </li>";
                    ?>
                    <li>
                        <?= $skills[$i] ?>
                    </li>
                    <?php
                        };
                    ?>
                </ul>
            </div>
            <div class="experiences-container">
                <h3>EXPERIENCES</h3>
                <div class="experiences-content">
                    <h4><?= $expsInfo['role']?></h3>
                    <p><?= $expsInfo['year']["Started"] . " - " . $expsInfo['year']["Ended"] . " ( {$expsInfo['company']} ) " ?></p>
                    <ul>
                        <?php
                            for($i = 0; $i < count($expsInfo["Experiences"]);$i++){
                        ?>
                        <li> <?= $expsInfo["Experiences"][$i]?> </li>
                        <?php        
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="certificates-container">
                <h3>CERTIFICATES</h3>
                <ul class="indent-list" >
                    <?php
                        for($i = 0; $i < count($certificates);$i++){
                    ?>
                    <li> <?= $certificates["DataScience"][$i] ?> </li>        
                    <?php       
                        }
                    ?>
                </ul>
            </div>
            <div class="references-container">
                <h3>REFERENCES</h3>
                <div class="indent-list">
                    <h4><?= $referencesInfo["reference1"]["name"] ?></h4>
                    <h5>( <?= $referencesInfo["reference1"]["company-role"] ?> )</h5>
                    <p> <?= $referencesInfo["reference1"]["phone"] ?> </p>
                </div>    
            </div>
        </div>
    </body>
    </html>
    