        </div>
        <div class="page__footer">
            <footer class="p-footer" id="footer">
                <div class="l-wrap p-footer__inner">
                    <div class="p-footer__inner--top">
                        <p class="footer_title">会社概要</p>
                        <p class="footer_des">
                            創業14年、海鮮一筋。<br>
                            新鮮な魚介にこだわり「おいしい」をお届けしています。
                        </p>
                        <table>
                            <tbody>
                                <tr>
                                    <th>会社名</th>
                                    <td>株式会社FUNEYA (フネヤ)</td>
                                </tr>
                                <tr>
                                    <th>住　所</th>
                                    <td>滋賀県草津市大路1-7-1<br>リーデンスタワー111 1階</td>
                                </tr>
                                <tr>
                                    <th>電　話</th>
                                    <td>077-569-2019</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="p-footer__inner--bottom">
                        <a class="f-card" href="">
                            <div class="bg-img">
                                <img src="<?php echo get_template_directory_uri();?>/release/image/footer/footer_new_img_1.png" alt="">
                                <div class="overlay"></div>
                                <div class="overlay_logo">
                                    <img src="<?php echo get_template_directory_uri();?>/release/image/footer/overlay_logo.png" alt="">
                                </div>
                            </div>
                            <div class="card_txt">
                                <p>
                                    刺身と魚飯<br>
                                    FUNEYA<br>
                                    草津駅前店
                                </p>
                            </div>
                        </a>
                        <a class="f-card" href="">
                            <div class="bg-img">
                                <img src="<?php echo get_template_directory_uri();?>/release/image/footer/footer_img_2.png" alt="" class="f_image">
                                <div class="overlay"></div>
                                <div class="overlay_logo">
                                    <img src="<?php echo get_template_directory_uri();?>/release/image/footer/overlay_logo.png" alt="">
                                </div>
                            </div>
                            <div class="card_txt">
                                <p>
                                    刺身と魚飯<br>
                                    FUNEYA<br>
                                    近江八幡店
                                </p>
                            </div>
                        </a>
                        <a class="f-card" href="">
                            <div class="bg-img">
                                <img src="<?php echo get_template_directory_uri();?>/release/image/footer/footer_img_1.png" alt="">
                                <div class="overlay"></div>
                                <div class="overlay_logo">
                                    <img src="<?php echo get_template_directory_uri();?>/release/image/footer/overlay_logo.png" alt="">
                                </div>
                            </div>
                            <div class="card_txt">
                                <p>
                                    刺身と魚飯<br>
                                    FUNEYA<br>
                                    野洲店
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="footer_copryright">
                    <p>©株式会社FUNEYA By <a href="https://jeengross.jp/" target="_blank">株式会社ジーングロス</a></p>
                </div>
            </footer>
        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script type="text/javascript">
        $('.slider').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
            arrows: true
        });
    </script>

    <script src="<?php echo get_template_directory_uri();?>/release/js/custom.js"></script>

    <script>
        (function(d) {
            var config = {
            kitId: 'xaw2lzc',
            scriptTimeout: 3000,
            async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>
</body>
</html>
