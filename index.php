<?php
//form submission script
include 'submit.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>sunflex contact form</title>
</head>
<body>

    <div class="container">
        <h1> Find Your Job </h1>
        <div class="form-wrapper">
            <form method="post" action="" enctype="multipart/form-data" class="animate-form">
                <h4 class="headt text-center"> Send us your application </h4>
                 
                <!-- Display submission status -->
                <?php if(!empty($statusMsg)){ ?>
                    <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
                <?php } ?>

                <!-- contact form -->
                <div class="form-group mb-3">
                     <input type="text" name="name" class="form-control" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>"
                      placeholder="Name" required="">
                </div>

                <div class="form-group mb-3">
                     <input type="email" name="email" class="form-control" class="form-label"  value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>"
                      placeholder="Email Address" required="">
                </div>
               
                <div class="form-group mb-3">
                     <input type="text" name="subject" class="form-control" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>"
                      placeholder="subject" required="">
                </div>


                 <div class="form-group mb-3">
                     <fieldset>
                        <p>what is your field of experience?</p>
                        <div class="radio">
                        <input type="radio" id="job" name="status" value="job">
                        <label for="job">Power Generation </label>
                        </div>
                        <div class="radio"> 
                        <input type="radio" id="business" name="status" value="business">
                        <label for="business">Oil & Gas</label>
                        </div>
                        <div class="radio">
                        <input type="radio" id="student" name="status" value="student">
                        <label for="student">Substation and Transmission</label>
                    </fieldset>
                </div>

                <div class="form-group mb-3">
                    
                      <textarea name="message" class="form-control" rows="4" placeholder="Cover Letter" required=""><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
                </div>
                
                <div class="form-group mb-3">
                     <input type="file" name="attachment" class="form-control">
                </div>
               
                <div class="submit mb-3">
                    <input type="submit" name="submit" class="btn" value="Submit">
                </div>

            </form>
        </div>
    </div>
</body>
</html>