<section id="heroheader"  class="hero-header w-full bg-red-100 "> 

    <?php $hero = get_field('hero');?>

    <img class="Pink-swirl" src="https://wordpressonvalet.test/wp-content/uploads/2024/10/Vector-1.png";>
    <img class="house-bg animate-in animate-bounce-in" src="https://wordpressonvalet.test/wp-content/uploads/2024/10/c9ebc665a3313ee80613dea5a15ba824-scaled.jpeg";>
    
        <div class="phone-mockup animate-in animate-bounce-in">

            <img class="phone-bg" src="https://wordpressonvalet.test/wp-content/uploads/2024/10/64c503569b0108989a092c920ec923ad.png";>

        </div>

        <div class="watch-mockup animate-in animate-bounce-in">

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