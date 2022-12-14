 <!DOCTYPE html>
<html lang="en">
    <head>
    			<title>
    						Al-Jamaal Learning Institute Course Registration Form
    			</title>
        <meta charset="UTF-8">
        <meta name="keyword" content="Al-Jamaal, Course, Registration, Form">
        <meta name="discription" content="Registration form">
        <meta name="author" content="Oyekanmi Khadijat">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x_icon" href="ab8.jpg">
        <style>
            body {
                background-color: rgba(211, 211, 211, 0.695);
                
            }
            #section {
                text-align: center;
            }
            .rec {               			
				text-align: center;
				padding: 10px;
			}
			a {
                color: gray;
				text-decoration: none;
			}
			a:hover {
				background-color: rgb(255, 246, 246);
			}
        </style>
    </head>
    <body>
        <header><h1><b>AL-JAMAAL learning Institute Course Registration Form</b></h1></header>
        <main>
            
                <form action="website.php"
                method="post">
                    <p>Fill the form below to register for your preferred course</p>

                  <section>
                    <fieldset>
                        <legend><h2>Personal Info:</h2></legend>
                        <label for="Full Name"><b>Full Name</b></label><br>
                    <input type="text" id="fullname" name="fullname" placeholder="John Doe"required></br><br>
                    
                    <label for="email"><b>Email</b></label><br>
                    <input type="email" name="email" placeholder="johndoe@gmail.com"required></br><br>
                    <label for="phone"><b>Phone Number</b></label><br>
                    <input type="tel" id="phone" name="phone" placeholder="000-123-45-789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{3}"required><br>
                    
                    <p><b>Select your gender:</b></p> 
                    <input type="radio" id="female" name="gender"required>
                    <label for="female">Female</label></br>                  
                    <input type="radio" id="male" name="gender">
                    <label for="male">Male</label></br>
                    <input type="radio" id="other" name="gender">
                    <label for="other">Others</label></br>

                    <p><b>Select your level of education:</b></p>
                    <select name="level" id="education level">
                        <option value="1">O Level</option>
                        <option value="2">Undergraduate</option>
                        <option value="3">Graduate</option>
                        <option value="4">Others</option>
                    </select>
                    
                    <p><b>Select your employment status:</b></p>
                    <select name="employment" id="employment status"required>
                        <option value="1">Employed</option></br>
                        <option value="2">Unemployed</option></br>
                        <option value="3">Student</option></br>
                        <option value="4">Others</option><br>                        
                    </select>
                    </fieldset>                        
                    
                  </section><br><hr>
                  
                  <section>
                    <fieldset>
                        <legend><h2>Learning Info:</h2></legend>
                        <p><b>Do you have a learning history ?</b></p>
                    <select name="history" id="learning history"required>
                        <option value="1">Yes</option></br>
                        <option value="2">No</option></br>
                        <option value="3">Maybe</option></br>
                    </select>

                    <p>If Maybe:</p>
                    <textarea name="maybe" id="maybe" cols="30" rows="2" placeholder="Specify your learning history"></textarea></br>
                    
                    <p><b>Select your training preference:</b></p>
                    <select name="training" id="preverence"required>
                        <option value="1">FREE</option></br>
                        <option value="2">PAID</option></br>
                        <option value="3">BOTH</option></br>
                    </select>
                                        
                    <p><b>Select your course preference:</b></p>
                    <select name="course" id="preverence"required>
                        <option value="1">BAG MAKING</option></br>
                        <option value="2">GRAPHIC DESIGN</option></br>
                        <option value="3">BOTH</option></br>
                    </select>
                                        
                    <p><b>If Bag Making, Select your course/courses:</b></p>              
                    <input type="checkbox" id="padded bags" name="pbag">
                    <label for="padded bags">Padded Bags</label></br>
                    
                    <input type="checkbox" id="Hand Bags" name="hbag">                                     
                    <label for="hand bags">Hand Bags</label></br>
                    
                    <input type="checkbox" id="school Bags" name="scbag">
                    <label for="school bags">School Bags</label></br>
                    
                    <input type="checkbox" id="side Bags" name="sbag">
                    <label for="side bags">Side Bags</label></br>
                    
                    <input type="checkbox" id="lunch Bags" name="lbag">
                    <label for="lunch bags">Lunch Bags</label></br>
                    
                    <input type="checkbox" id="sourvenirs" name="s">
                    <label for="sourvenirs">Sourvenirs</label></br>
                    
                    <input type="checkbox" id="Purse" name="p">
                    <label for="Purses">Purses</label></br>
                    
                    <input type="checkbox" id="all" name="all">
                    <label for="all">ALL</label></br>
                    </fieldset>
                  </section>            
                    
                    </section>
                                                                                                                                                 
                    <section>
                    <p><b>Do you have a message for us ?</b></p>
                    <textarea name="message" id="area" cols="40" rows="10" placeholder="Enter your message here"></textarea><br><br>
                    
                    <button type="submit" style="background-color: green; color: lightgrey; width:70px; height: 30px; allign: center;" name="submit">SUBMIT</button><br><br><br>
                    <p id="section">
                        <small> By clicking 'SUBMIT' you agree that all the information provided are correct. You also agree to receive information and offers relevant to our services via emails.<br> You can opt-out of these emails by providing your WhatsApp number in the form above.</small><br><br><br><hr><br>
                    </p>
                    </form>
            </section>
        </main>
        
        <section class="rec">
            <p><a href="index.html">Home</a></p>
            <p><a href="index.html">Al-Jamaal Exotic Bags</a></p>
            <p><a href="index.html">Al-Jamaal Graphic Design</a></p>
            <p><a href="index.html">Al-Jamaal Learning Institite</a></p>
            <p><a href="https://wa.me/message/POPMK4ZCIHDWF1">Contact Us</a></p>
            <footer>
                <small>copyright &copy; 2022 | Oyekanmi Khodeejah</small>
            </footer>	   
        </section>
    </body>
</html>
 
