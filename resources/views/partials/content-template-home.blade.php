<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  
</head>
<body>

    <!-- Hero section-->
    <section id="heroheader"  class="hero-header w-full bg-red-100 "> 

        <?php $hero = get_field('hero');?>

        <img class="Pink-swirl" src="https://wordpressonvalet.test/wp-content/uploads/2024/10/Vector-1.png";>
        <img class="house-bg animate-in" src="https://wordpressonvalet.test/wp-content/uploads/2024/10/c9ebc665a3313ee80613dea5a15ba824-scaled.jpeg";>
        
            <div class="phone-mockup animate-in">

                <img class="phone-bg" src="https://wordpressonvalet.test/wp-content/uploads/2024/10/64c503569b0108989a092c920ec923ad.png";>

            </div>

            <div class="watch-mockup animate-in">

            </div>
          
          
            <div class="bg-width flex-hero margin-hero">

                <div class=" col-1-hero">

                    <div class="label-head">
                            <div class="circle-float">

                                <div class="pulsating-circle"></div>

                            </div>

                            <div class="label-float">
                                 <h4><?php echo $hero['label'];?> </h4>
                             </div>
                            
                    </div>

                        <h1 class="text-gap"><?php echo $hero['main_title'];?> </h1> 
                            <p class="text-gap"><?php echo $hero['paragraph'];?></p>

                                <div class="margin-gap">
                                    <a class="button-style-green" href="<?php echo $hero['button-1-url'];?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="svg-button-1 size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    <button class><?php echo $hero['button-1'];?></button>
                                    </a>
                            
                                    <a class="button-style-black" href="<?php echo $hero['button-2-url'];?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="svg-button-1 size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    <button class><?php echo $hero['button-2'];?></button>
                                    </a>
                                </div>

                </div>

                <div class="col-2-hero">

                </div>
            </div>
    </section>

    <!-- card section -->

    <section id="card-columns" class="bg-width">

        <?php $columns = get_field('columns');?>

        <div class="columns-div">

            <div class="column-div-mini-1">
                <div class="div-icon-arrow">
                    <div class="svg-circle-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </div>
                    <div class="svg-circle-ontop">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </div>
                
                    <p class="arrow-div"> > </p>

                </div>
                        <h3><?php echo $columns['titel_column_1'];?></h3>
                        <p><?php echo $columns['tekst_column_1'];?> </p>
                </div>

            <div class="column-div-mini-2">

                    <div class="div-icon-arrow">
                    <div class="svg-circle-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </div>
                    <div class="svg-circle-ontop">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </div>
                
                    <p class="arrow-div"> > </p>

                 </div>
                     <h3><?php echo $columns['titel_column_2'];?></h3>
                     <p><?php echo $columns['tekst_column_2'];?> </p>
                 </div>
          
                 <div class="column-div-mini-3">
                    <div class="div-icon-arrow">
                        <div class="svg-circle-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                        </div>
                        <div class="svg-circle-ontop">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                        </div>
                    
                        <p class="arrow-div"> > </p>
    
                     </div>
                         <h3><?php echo $columns['titel_column_3'];?></h3>
                         <p><?php echo $columns['tekst_column_3'];?> </p>
                     </div>
                </div>
            </div>
            

        </div>

    </section>

   <!-- text-media-section-blauw -->

    <section  class="text-media-blauw w-full" >
        <?php $text_media_blauw = get_field('text_media_blauw');?>

        
        <div class="text-media-flex bg-width">
            <div class="text-media-left-bl">
                <div class=" col-1-hero">

                    <div class="label-head border-style">
                            <div class="circle-float">

                                <div class="pulsating-circle"></div>

                            </div>

                            <div class="label-float ">
                                 <h4><?php echo $text_media_blauw['label-blauw'];?> </h4>
                             </div>
                            
                    </div>

                        <h2 class="text-gap"><?php echo $text_media_blauw['titel_blauw'];?> </h2> 
                            <p class="text-gap"><?php echo $text_media_blauw['tekst-blauw'];?></p>

                                <div class="margin-gap">
                                    <a class="button-style-green" href="<?php echo $text_media_blauw['button-url-blauw-1'];?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="svg-button-1 size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    <button class><?php echo $text_media_blauw['button-blauw-tekst-1'];?></button>
                                    </a>
                            
                                    <a class="button-style-black" href="<?php echo $text_media_blauw['button-url-blauw-2'];?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="svg-button-1 size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    <button class><?php echo $text_media_blauw['button-blauw-tekst-2'];?></button>
                                    </a>
                                </div>

                </div>

            </div>
            <div class="text-media-right-bl">
                <div class="phone-high">
                    <div class="phone-blauw">
                        <img class="phone-bg" src="https://wordpressonvalet.test/wp-content/uploads/2024/10/64c503569b0108989a092c920ec923ad.png";>
                    </div>
                </div>
                <div class="swirl-blue">
                    <img class="right-swirl-blue" src="https://wordpressonvalet.test/wp-content/uploads/2024/10/Vector-1-2.png";>

                </div>
            </div>

        </div>
    </section>

    <!-- text-media-section-blauw -->

     <section  class="text-media-pink w-full" >

        <?php $text_media_roze = get_field('text_media_roze');?>

        <div class="text-media-flex bg-width">
            <div class="text-media-left-pnk">
                <div class="phone-high">
                    <div class="phone-blauw">
                        <img class="phone-bg" src="https://wordpressonvalet.test/wp-content/uploads/2024/10/64c503569b0108989a092c920ec923ad.png";>
                    </div>
                </div>
                <div class="swirl-blue">
                    <img class="right-swirl-blue" src="https://wordpressonvalet.test/wp-content/uploads/2024/10/Vector-1-3.png";>

                </div>

            </div>
            <div class="text-media-right-pnk">
                <div class=" col-1-hero">

                    <div class="label-head">
                            <div class="circle-float">

                                <div class="pulsating-circle"></div>

                            </div>

                            <div class="label-float">
                                 <h4><?php echo $text_media_roze['label-roze'];?> </h4>
                             </div>
                            
                    </div>

                        <h2 class="text-gap"><?php echo $text_media_roze['titel-roze'];?> </h2> 
                            <p class="text-gap"><?php echo $text_media_roze['tekst-roze'];?></p>

                                <div class="margin-gap">
                                    <a class="button-style-green" href="<?php echo $text_media_roze['button-url-roze-1'];?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="svg-button-1 size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    <button class><?php echo $text_media_roze['button-roze-tekst-1'];?></button>
                                    </a>
                            
                                    <a class="button-style-black" href="<?php echo $text_media_roze['button-url-roze-2'];?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="svg-button-1 size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    <button class><?php echo $text_media_roze['button-roze-tekst-2'];?></button>
                                    </a>
                                </div>

                </div>
               
            </div>

        </div>
    </section>
  
</body>
</html>