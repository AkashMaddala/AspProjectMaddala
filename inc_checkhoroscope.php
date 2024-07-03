<?php 
//created by Akash Maddala
    $horoscopeArray = [" You should steer clear of investments without proper planning, and you'll have to use your capabilities well." => "Aries",
        
        " Don't overlook your parents' advice, keep care of your health, and don't worry if your daily routine becomes a little more chaotic." =>"Taurus",
        
        " Positivity is on its way in your marriage, and the health of your family will stay good. A promotion may be coming, too." => "Gemini",
        
        " You will spend time contemplating, and receiving guidance from suitable people, and problems in higher education will go away. There is a chance of success in job interviews, and keep an eye out for the colour red." => "Cancer",
        
        " Creative thoughts will start to form in your mind, and your reputation at work will increase. If you have kids, you'll be spending some real quality time with them." => "Leo",
        
        " You should keep your plans to yourself for now. It's a big day for marketing and media people, though family members might get upset with you. Work will be carried out at a slower rate, and excessive praise should be avoided." => "Virgo",
        
        " New business deals will present themselves and don't give too much importance to others' opinions." => "Libra",
        
        " It's important that you try to maintain a disciplined daily routine, and you'll have to work extra hard today. You're likely to be fearful of an unwanted event." => "Scorpio",
        
        " It's essential that you strike a balance between your family and work life, and some long-term issues will be resolved today. Your responsibility and authority at work will increase, but don't give your trust away so easily." => "Sagittarius",
        
        " Be careful with lending and borrowing money, pay attention to the rules of the road, and don't let the quality of your work slip too much. Remember your goals and don't become careless about them." => "Capricorn",
        
        " Self-confidence will remain high and thoughts of marriage might cross your mind. There's some excitement about work, and things will stay good in your family." => "Aquarius",
        
        " Others see you as being in this world but not of it. And this attracts all kinds of lovers and admirers your way." => "Pisces"
        
        
    ];
    
                        $result;
                        $dobEntered = $_POST['dob'];
                        
                       
                       
                        $monthFromDOB=date('n', strtotime($dobEntered));
                        switch($monthFromDOB){
                            
                            case 4:
                            
                                 $sql = array_search("Aries", $horoscopeArray);
                                 
                                break;
                            
                            case 5:
                      
                                $sql = array_search("Taurus", $horoscopeArray);
                                break;
                            
                            case 6:
                                
                                $sql = array_search("Gemini", $horoscopeArray);
                                break;
                                
                            case 7:
                                
                                $sql = array_search("Cancer", $horoscopeArray);
                                break;
                         
                                
                            case 8:
                                
                                    $sql = array_search("Leo", $horoscopeArray);
                                break;
                                
                            case 9:
                                
                                $sql = array_search("Virgo", $horoscopeArray);
                                break;
                                
                            case 10:
                                
                                $sql = array_search("Libra", $horoscopeArray);
                                break;
                                
                            case 11:
                                
                                $sql = array_search("Scorpio", $horoscopeArray);
                                break;
                               
                                
                            case 12:
                                
                                $sql = array_search("Sagittarius", $horoscopeArray);
                                break;
                                
                            case 1:
                                
                                $sql = array_search("Capricorn", $horoscopeArray);
                                break;
                                
                            case 2:
                                
                                $sql = array_search("Aquarius", $horoscopeArray);
                                break;
                                
                            case 3:
                                
                                $sql = array_search("Pisces", $horoscopeArray);
                                break;
                        
                        
                        }
                       echo("<div class='container'><h3>Your horoscope for today is:</h3><h4 class='py-5 purple text-xenter'>Hello ".strtoupper($nameOfPerson) .$sql."</h4></div>")
                        

                                 
?>