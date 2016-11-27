<?php get_header(); ?>

 <section class="contact">
     <div class="contact_text">
         <div class="contact_h1">
             <h1 class="contact_contact">CONTACT</h1>
         </div>
         <div class="contact_renrack">
             <p class="contact_explane">連絡先1</p>
             <p class="contact_explane">連絡先2</p>
             <p class="contact_explane">連絡先3</p>
         </div>
     </div>

     <div class="contact_form">
         <div class="contact_line_a">
             <div class="contact_name">
                 <p class="contact_form-title">name</p>
                 <input type="text" id="name" name="name" class="contact_input contact_input_narrow">
             </div>
             <div class="contact_email">
                 <p class="contact_form-title">email</p>
                 <input type="text" id="email" class="contact_input contact_input_narrow">
             </div>
         </div>

         <div class="contact_line_b">
             <div class="contact_subject">
                 <p class="contact_form-title">subject</p>
                 <input type="text" id="subject" class="contact_input contact_input_wide">
             </div>
             <div class="contact_message">
                 <p class="contact_form-title">message</p>
                 <input type="textarea" id="message" class="contact_input contact_input_wide">
             </div>
         </div>
         <div class="contact_check">
             <input type="checkbox" name="check">
             <span class="content_label">この内容で送信します。よろしければチェックを入れてください。</span>
             <input type="submit" name="submit" value="submit" class="contact_submit">
         </div>
     </div>

    <div class="contact_thanks">
        ご記入いただきありがとうございます。
    </div>
 </section>



 <?php get_footer(); ?>
