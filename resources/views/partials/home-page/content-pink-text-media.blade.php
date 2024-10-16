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