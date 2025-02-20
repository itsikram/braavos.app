<?php

/**
 * Single post
 */

get_header();

$blog_telegram_link = get_post_meta(get_the_ID(), '_blog_telegram_link', true);
$blog_x_link = get_post_meta(get_the_ID(), '_blog_x_link', true);
$blog_braavos_link = get_post_meta(get_the_ID(), '_blog_braavos_link', true);
$blog_linkedin_link = get_post_meta(get_the_ID(), '_blog_linkedin_link', true);

[
    'share_buttons' => $shareButtons,
    'reading_time_postfix' => $readingTimePostfix,
    'see_also_section_title' => $seeAlsoSectionTitle,
] = array(
    "share_buttons" => array(
        "title" => "Share",
        "button" => array(
            array(
                "title" => "Share on X",
                "url" => "https://twitter.com/intent/tweet?text={excerpt}%20{url}",
                "svg_icon" => '<svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M18.1339 0.679688C8.1188 0.679688 0 8.79849 0 18.8135C0 28.8286 8.1188 36.9474 18.1339 36.9474C28.1489 36.9474 36.2677 28.8286 36.2677 18.8135C36.2677 8.79849 28.1489 0.679688 18.1339 0.679688ZM26.061 25.4663C26.9646 26.7438 27.8675 28.0206 28.7691 29.2994L28.7677 29.2987C28.7983 29.3418 28.8216 29.3896 28.85 29.4481C28.865 29.4789 28.8814 29.5126 28.9011 29.5503C28.8549 29.5537 28.8137 29.5575 28.7758 29.5609C28.7017 29.5676 28.6402 29.5732 28.5785 29.5732C27.8942 29.5741 27.21 29.5747 26.5257 29.5752C25.2938 29.5761 24.0619 29.577 22.83 29.5803C22.6138 29.5809 22.4745 29.5171 22.3444 29.3326C20.8794 27.2486 19.4077 25.1691 17.936 23.0896C17.5574 22.5546 17.1787 22.0195 16.8002 21.4844C16.772 21.4443 16.7426 21.4054 16.706 21.3568C16.6872 21.3319 16.6665 21.3045 16.6431 21.2731C16.6166 21.2966 16.5905 21.318 16.5653 21.3388C16.5157 21.3796 16.4697 21.4174 16.4309 21.4615C15.8803 22.0822 15.3284 22.702 14.7764 23.3217C13.1912 25.1016 11.6057 26.8817 10.0529 28.6877C9.49561 29.3364 8.7846 29.5796 8.04468 29.5796C7.95686 29.5796 7.86794 29.5786 7.7715 29.5774C7.65721 29.576 7.53236 29.5745 7.38624 29.5745C7.41666 29.531 7.44182 29.4931 7.46419 29.4594C7.50516 29.3978 7.53678 29.3502 7.57418 29.3077C8.39608 28.3777 9.21864 27.4481 10.0412 26.5186C10.8641 25.5887 11.687 24.6589 12.5092 23.7285C12.8418 23.3521 13.1736 22.975 13.5055 22.5978C14.203 21.8052 14.9007 21.0124 15.6055 20.2255C15.7481 20.0659 15.7291 19.9593 15.6239 19.8111C14.5564 18.3031 13.4897 16.7943 12.4229 15.2854C11.8566 14.4844 11.2903 13.6833 10.7238 12.8824C10.3189 12.31 9.91376 11.7379 9.50868 11.1659C8.83564 10.2155 8.16267 9.26514 7.49073 8.31381C7.46097 8.27149 7.43998 8.22311 7.41402 8.16327C7.40043 8.13194 7.38548 8.09747 7.36719 8.05908H7.86463C8.24982 8.05921 8.63498 8.05951 9.02012 8.0598C10.4964 8.06094 11.9724 8.06207 13.4489 8.05397C13.69 8.05269 13.8241 8.13952 13.9535 8.32338C15.6988 10.8029 17.4506 13.2787 19.2025 15.7544L19.2026 15.7546C19.2301 15.7931 19.2629 15.8279 19.3036 15.8709C19.3243 15.8929 19.3471 15.917 19.3722 15.9449C19.4367 15.8759 19.5001 15.8091 19.5623 15.7435C19.6971 15.6014 19.8266 15.465 19.9511 15.3243C20.2074 15.0344 20.4638 14.7445 20.7201 14.4546C22.4997 12.442 24.279 10.4297 26.0492 8.40957C26.274 8.15293 26.498 8.02205 26.8555 8.05078C27.1525 8.07453 27.4519 8.0695 27.7751 8.06406C27.9211 8.06161 28.0719 8.05908 28.2296 8.05908C28.1972 8.10487 28.1707 8.14433 28.1473 8.17915C28.1051 8.24191 28.0731 8.28962 28.035 8.33232C25.4939 11.2046 22.9529 14.0762 20.4072 16.9446C20.2665 17.103 20.2225 17.2185 20.3598 17.412C21.8645 19.5291 23.3635 21.6499 24.8625 23.7708C25.262 24.3359 25.6615 24.9011 26.061 25.4663ZM24.9613 28.2374C25.1115 28.2382 25.2617 28.2391 25.4118 28.2389L25.4125 28.2377H26.3278C26.2898 28.1797 26.2579 28.1302 26.2296 28.0863C26.1787 28.0072 26.1394 27.9463 26.0972 27.8872C25.6417 27.2537 25.1859 26.6204 24.7302 25.9872C24.1406 25.168 23.551 24.3489 22.9621 23.5293C22.0871 22.3113 21.2127 21.0929 20.3382 19.8744C19.3206 18.4565 18.303 17.0386 17.2845 15.6212C16.7801 14.9195 16.275 14.2184 15.7699 13.5173C14.859 12.2528 13.9482 10.9885 13.0415 9.72153C12.9146 9.54532 12.7806 9.4719 12.5598 9.47446C12.0528 9.4807 11.5458 9.4788 11.0389 9.4769C10.7684 9.47589 10.498 9.47487 10.2276 9.4751C10.181 9.4751 10.1341 9.48549 10.0798 9.49752C10.0522 9.50362 10.0227 9.51015 9.99043 9.51595C10.0093 9.54876 10.0259 9.57915 10.0414 9.60763C10.0724 9.66448 10.0993 9.71368 10.1317 9.75919C10.917 10.8579 11.7022 11.956 12.4908 13.0522C13.6607 14.6778 14.8311 16.3029 16.0014 17.928C17.3737 19.8334 18.7459 21.7387 20.1174 23.6449C21.1497 25.08 22.1814 26.5158 23.2045 27.9574C23.3576 28.1738 23.5311 28.2594 23.8025 28.2485C24.1882 28.2329 24.5748 28.2351 24.9613 28.2374Z" fill="white"></path>
</svg>',
                "svg_icon_lightmode" => '<svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M18.4932 0.683594C8.47818 0.683594 0.359375 8.8024 0.359375 18.8174C0.359375 28.8325 8.47818 36.9513 18.4932 36.9513C28.5083 36.9513 36.6271 28.8325 36.6271 18.8174C36.6271 8.8024 28.5083 0.683594 18.4932 0.683594ZM26.4204 25.4702C27.324 26.7477 28.2269 28.0245 29.1284 29.3033L29.1271 29.3026C29.1577 29.3457 29.1809 29.3935 29.2094 29.452C29.2244 29.4828 29.2408 29.5166 29.2605 29.5542C29.2143 29.5576 29.1731 29.5614 29.1352 29.5648C29.0611 29.5716 28.9996 29.5771 28.9379 29.5771C28.2536 29.5781 27.5693 29.5786 26.8851 29.5791C25.6532 29.58 24.4213 29.5809 23.1893 29.5842C22.9732 29.5848 22.8338 29.521 22.7037 29.3365C21.2387 27.2525 19.7671 25.173 18.2954 23.0935C17.9167 22.5585 17.5381 22.0235 17.1596 21.4883C17.1313 21.4482 17.1019 21.4093 17.0653 21.3607C17.0466 21.3358 17.0259 21.3084 17.0025 21.277C16.976 21.3005 16.9499 21.3219 16.9247 21.3427C16.8751 21.3835 16.8291 21.4213 16.7903 21.4654C16.2397 22.0862 15.6878 22.7059 15.1358 23.3256C13.5505 25.1055 11.9651 26.8856 10.4122 28.6917C9.85499 29.3403 9.14398 29.5835 8.40406 29.5835C8.31624 29.5835 8.22732 29.5825 8.13087 29.5813C8.01659 29.5799 7.89173 29.5784 7.74562 29.5784C7.77603 29.5349 7.80119 29.497 7.82357 29.4633C7.86453 29.4017 7.89616 29.3541 7.93356 29.3116C8.75546 28.3816 9.57802 27.452 10.4006 26.5225C11.2235 25.5926 12.0463 24.6628 12.8686 23.7324C13.2012 23.356 13.533 22.9789 13.8649 22.6017C14.5624 21.8091 15.26 21.0163 15.9649 20.2294C16.1075 20.0698 16.0885 19.9632 15.9833 19.815C14.9158 18.3071 13.8491 16.7982 12.7823 15.2893C12.216 14.4883 11.6496 13.6872 11.0832 12.8863C10.6782 12.3139 10.2731 11.7418 9.86805 11.1698C9.19502 10.2194 8.52205 9.26905 7.8501 8.31771C7.82034 8.27539 7.79936 8.22702 7.7734 8.16718C7.75981 8.13585 7.74485 8.10138 7.72656 8.06298H8.22401C8.60919 8.06312 8.99435 8.06341 9.37949 8.06371C10.8558 8.06484 12.3318 8.06598 13.8082 8.05788C14.0494 8.0566 14.1835 8.14343 14.3129 8.32729C16.0582 10.8068 17.81 13.2826 19.5619 15.7583L19.562 15.7585C19.5894 15.797 19.6223 15.8318 19.663 15.8749C19.6837 15.8968 19.7065 15.9209 19.7316 15.9488C19.7961 15.8798 19.8594 15.813 19.9217 15.7475C20.0565 15.6053 20.1859 15.4689 20.3105 15.3282C20.5668 15.0383 20.8231 14.7484 21.0795 14.4585C22.859 12.4459 24.6383 10.4336 26.4086 8.41348C26.6333 8.15683 26.8574 8.02596 27.2149 8.05468C27.5118 8.07843 27.8113 8.0734 28.1345 8.06797C28.2804 8.06552 28.4313 8.06298 28.5889 8.06298C28.5566 8.10878 28.5301 8.14824 28.5067 8.18306C28.4645 8.24581 28.4325 8.29353 28.3944 8.33623C25.8533 11.2085 23.3122 14.0801 20.7665 16.9485C20.6259 17.1069 20.5819 17.2224 20.7192 17.4159C22.2239 19.533 23.7228 21.6538 25.2219 23.7747C25.6213 24.3398 26.0208 24.905 26.4204 25.4702ZM25.3206 28.2413C25.4709 28.2421 25.6211 28.243 25.7712 28.2428L25.7718 28.2416H26.6872C26.6492 28.1836 26.6173 28.1341 26.589 28.0902C26.5381 28.0111 26.4988 27.9502 26.4566 27.8911C26.001 27.2576 25.5453 26.6243 25.0895 25.9911C24.4999 25.1719 23.9104 24.3528 23.3214 23.5332C22.4464 22.3152 21.572 21.0968 20.6976 19.8783C19.68 18.4604 18.6624 17.0425 17.6439 15.6251C17.1394 14.9234 16.6343 14.2223 16.1293 13.5212C15.2184 12.2567 14.3076 10.9924 13.4008 9.72543C13.274 9.54923 13.1399 9.47581 12.9192 9.47836C12.4122 9.48461 11.9052 9.48271 11.3982 9.48081C11.1278 9.47979 10.8574 9.47878 10.587 9.479C10.5404 9.479 10.4935 9.4894 10.4391 9.50143C10.4116 9.50753 10.3821 9.51406 10.3498 9.51986C10.3687 9.55267 10.3852 9.58306 10.4008 9.61153C10.4318 9.66838 10.4587 9.71758 10.4911 9.7631C11.2763 10.8618 12.0616 11.9599 12.8502 13.0561C14.0201 14.6817 15.1905 16.3068 16.3608 17.9319C17.7331 19.8373 19.1053 21.7427 20.4767 23.6488C21.5091 25.0839 22.5408 26.5197 23.5639 27.9613C23.717 28.1777 23.8905 28.2633 24.1619 28.2524C24.5475 28.2368 24.9342 28.239 25.3206 28.2413Z" fill="#242424"></path>
</svg>'
            ),
            array(
                "title" => "Share on Telegram",
                "url" => "https://telegram.me/share/url?url={url}&text={excerpt}",
                "svg_icon" => '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M39.3869 19.8171C39.3869 30.572 30.6684 39.2905 19.9135 39.2905C9.15862 39.2905 0.440063 30.572 0.440063 19.8171C0.440063 9.06227 9.15862 0.34375 19.9135 0.34375C30.6684 0.34375 39.3869 9.06227 39.3869 19.8171ZM20.6115 14.7117C18.7172 15.5037 14.932 17.1367 9.25567 19.6107C8.33303 19.9781 7.8513 20.3316 7.81048 20.6713C7.73493 21.2649 8.47536 21.4971 9.49039 21.8154C9.62724 21.8583 9.76908 21.9028 9.91459 21.9499C10.9091 22.2732 12.2465 22.6505 12.9422 22.6652C13.5725 22.6799 14.2763 22.4202 15.0536 21.8862C20.3576 18.3067 23.0953 16.4974 23.2668 16.4582C23.3325 16.4324 23.4033 16.4226 23.4735 16.4294C23.5438 16.4362 23.6114 16.4595 23.6709 16.4974C23.712 16.5439 23.7415 16.5993 23.7573 16.6593C23.773 16.7193 23.7745 16.7821 23.7616 16.8427C23.6872 17.1551 20.7995 19.8405 19.2863 21.2477C18.8057 21.6946 18.4638 22.0126 18.3947 22.0846C18.2407 22.2452 18.0837 22.3969 17.933 22.5425C17.0118 23.4324 16.3235 24.0974 17.9759 25.1857C18.7646 25.7061 19.397 26.1367 20.0267 26.5656C20.7248 27.0411 21.4198 27.5144 22.3213 28.1055C22.5464 28.254 22.7615 28.408 22.971 28.5579C23.7803 29.1373 24.5062 29.6569 25.4052 29.5751C25.9244 29.5384 26.4633 29.0485 26.7352 27.5788C27.3794 24.1299 28.6458 16.6566 28.9398 13.5776C28.9579 13.3216 28.9472 13.0645 28.9079 12.8109C28.8848 12.6069 28.786 12.419 28.6311 12.2843C28.4096 12.1318 28.1456 12.053 27.8767 12.0589C27.1443 12.0712 26.02 12.4631 20.6115 14.7117Z" fill="white"></path>
</svg>',
                "svg_icon_lightmode" => '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1620_4094)">
<path d="M20.032 39.4194C30.7869 39.4194 39.5055 30.7009 39.5055 19.946C39.5055 9.19118 30.7869 0.472656 20.032 0.472656C9.27715 0.472656 0.558594 9.19118 0.558594 19.946C0.558594 30.7009 9.27715 39.4194 20.032 39.4194Z" fill="#242424"></path>
<path d="M9.37237 19.7396C15.0487 17.2656 18.8339 15.6326 20.7282 14.8406C26.1367 12.592 27.261 12.2001 27.9934 12.1878C28.2623 12.1819 28.5263 12.2607 28.7478 12.4132C28.9027 12.5479 29.0015 12.7358 29.0246 12.9398C29.0639 13.1934 29.0746 13.4505 29.0565 13.7065C28.7625 16.7855 27.4961 24.2589 26.8519 27.7077C26.58 29.1774 26.0411 29.6673 25.5219 29.7041C24.3902 29.8069 23.5329 28.957 22.438 28.2344C20.7233 27.1101 19.7558 26.4119 18.0926 25.3146C16.1697 24.0482 17.4165 23.355 18.5114 22.2135C18.798 21.9147 23.7803 17.3832 23.8783 16.9716C23.8912 16.911 23.8897 16.8482 23.874 16.7882C23.8582 16.7282 23.8287 16.6728 23.7876 16.6263C23.7281 16.5884 23.6605 16.5651 23.5902 16.5583C23.52 16.5515 23.4492 16.5613 23.3835 16.5871C23.212 16.6263 20.4743 18.4356 15.1703 22.0151C14.393 22.5491 13.6892 22.8088 13.0589 22.7941C12.3632 22.7794 11.0258 22.4022 10.0313 22.0788C8.80654 21.682 7.84144 21.4738 7.92718 20.8002C7.968 20.4605 8.44973 20.107 9.37237 19.7396Z" fill="white"></path>
</g>
<defs>
<clipPath id="clip0_1620_4094">
<rect width="38.9469" height="38.9467" fill="white" transform="translate(0.558594 0.472656)"></rect>
</clipPath>
</defs>
</svg>'
            ),
            array(
                "title" => "Share on LinkedIn",
                "url" => "https://www.linkedin.com/sharing/share-offsite/?url={url}",
                "svg_icon" => '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M19.975 39.2898C30.7307 39.2898 39.45 30.5706 39.45 19.8148C39.45 9.0591 30.7307 0.339844 19.975 0.339844C9.21925 0.339844 0.5 9.0591 0.5 19.8148C0.5 30.5706 9.21925 39.2898 19.975 39.2898ZM32.6049 30.4434H27.8257V22.3034C27.8257 20.0717 26.9777 18.8245 25.2113 18.8245C23.2896 18.8245 22.2856 20.1224 22.2856 22.3034V30.4434H17.6798V14.9369H22.2856V17.0256C22.2856 17.0256 23.6704 14.4631 26.961 14.4631C30.2501 14.4631 32.6049 16.4716 32.6049 20.6256V30.4434ZM12.1851 12.9064C10.6162 12.9064 9.34497 11.6252 9.34497 10.045C9.34497 8.46483 10.6162 7.18359 12.1851 7.18359C13.7539 7.18359 15.0244 8.46483 15.0244 10.045C15.0244 11.6252 13.7539 12.9064 12.1851 12.9064ZM9.80684 30.4434H14.6095V14.9369H9.80684V30.4434Z" fill="white"></path>
</svg>',
                "svg_icon_lightmode" => '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1620_4097)">
<path fill-rule="evenodd" clip-rule="evenodd" d="M4.38993 39.4233H34.6819C37.0719 39.4233 39.0094 37.4858 39.0094 35.0959V4.80398C39.0094 2.41401 37.0719 0.476562 34.6819 0.476562H4.38993C1.99996 0.476563 0.0625 2.41401 0.0625 4.80398V35.0959C0.0625 37.4858 1.99996 39.4233 4.38993 39.4233Z" fill="#242424"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M31.4396 31.3067H26.6604V23.1667C26.6604 20.935 25.8124 19.6878 24.046 19.6878C22.1243 19.6878 21.1203 20.9857 21.1203 23.1667V31.3067H16.5145V15.8002H21.1203V17.8889C21.1203 17.8889 22.5051 15.3264 25.7958 15.3264C29.0849 15.3264 31.4396 17.3349 31.4396 21.4889V31.3067ZM11.0198 13.7697C9.45096 13.7697 8.17969 12.4885 8.17969 10.9083C8.17969 9.32812 9.45096 8.04688 11.0198 8.04688C12.5886 8.04688 13.8591 9.32812 13.8591 10.9083C13.8591 12.4885 12.5886 13.7697 11.0198 13.7697ZM8.64155 31.3067H13.4442V15.8002H8.64155V31.3067Z" fill="white"></path>
</g>
<defs>
<clipPath id="clip0_1620_4097">
<rect x="0.0585938" y="0.472656" width="38.9469" height="38.9467" rx="19.4734" fill="white"></rect>
</clipPath>
</defs>
</svg>'
            )
        )
    ),
    "reading_time_postfix" => "min read",
    "see_also_section_title" => "More Articles"
);
function get_reading_time($post_id = null)
{
    // Get the post content
    $post_id = $post_id ? $post_id : get_the_ID();
    $post_content = get_post_field('post_content', $post_id);

    if (!$post_content) {
        return '0 min read';
    }

    // Count words in the content
    $word_count = str_word_count(strip_tags($post_content));

    // Define average reading speed (words per minute)
    $reading_speed = 200; // Average reading speed

    // Calculate reading time
    $reading_time = ceil($word_count / $reading_speed);

    // Return formatted reading time
    return sprintf('%d min read', $reading_time);
}

?>


<section class="single-post-section section-bg-control">
    <div class="container py-5 px-0">
        <div class="row">
            <div class="col theme-color font-jakarta px-0">
                <a href="<?php echo site_url() . '/blog/'; ?>" class="career-backbtn-container my-5 d-flex align-items-center justify-content-start theme-color mt-3">
                    <span style="margin-right: 5px; line-height: 0;">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/career-back-button.png'; ?>" class="icon-light" alt="">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/career-back-button-dark.png'; ?>" class="icon-dark" alt="">
                    </span>
                    <span>Back to the Blogs</span>
                </a>
                <div class="single-tags-container theme-color mb-3 fs-5">
                    <?php
                    $tags = get_the_terms(get_the_ID(), 'category');

                    // Check if there are tags
                    if (!empty($tags) && !is_wp_error($tags)) {
                        foreach ($tags as $tag) {
                            echo '<span class="tag transparent-bg-control">' . esc_html($tag->name) . '</span>'; // Display tag name
                        }
                    }; ?>
                </div>
                <h1 class="single-post-title theme-color fs-1">
                    <?php echo get_the_title(); ?>
                </h1>
                <p class="single-post-except theme-color fs-4">
                    <?php echo get_the_excerpt(); ?>
                </p>
                <div class="meta-container theme-color mb-3">
                    <div class="meta-app">
                        <span><img src="<?php echo get_template_directory_uri() . '/assets/images/icons/single-post-top-icon.png'; ?>" alt=""></span>
                        <span>Braavos team</span>
                    </div>
                    <div class="meta-date">|
                        <?php echo get_the_date('d.m.Y'); ?>
                    </div>
                </div>
                <div class="post-thumbnail-container my-3 mb-5">
                    <img class="w-100" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'large')[0]; ?> ;
" alt="<?php echo get_the_title(); ?>">
                </div>
                <div class="single-post-content-container theme-color fs-4">
                    <?php the_content(); ?>
                </div>

                <div class="single-post-social my-5 py-5 transparent-bg-control">
                    <div class="row align-items-center">
                        <div class="col-md-2 col-4">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-nofind-icon.png'; ?>" alt="">
                        </div>
                        <div class="col-md-6 col-8">
                            <h2 class="social-title">Braavos Team</h2>
                            <div class="social-icons-container">
                                <a href="<?php echo $blog_x_link; ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/social/x-light.png'; ?>'" class="icon-light" alt="">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/social/x-dark.png'; ?>'" class="icon-dark" alt="">

                                </a>

                                <a href="<?php echo $blog_braavos_link; ?>">

                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/social/braavos-light.png'; ?>'" class="icon-light" alt="">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/social/braavos-dark.png'; ?>'" class="icon-dark" alt="">
                                </a>


                                <a href="<?php echo $blog_telegram_link; ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/social/twitter-light.png'; ?>'" class="icon-light" alt="">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/social/twitter-dark.png'; ?>'" class="icon-dark" alt="">
                                </a>


                                <a href="<?php echo $blog_linkedin_link; ?>">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/social/linkedin-light.png'; ?>'" class="icon-light" alt="">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/social/linkedin-dark.png'; ?>'" class="icon-dark" alt="">
                                </a>

                            </div>
                        </div>
                        <!-- <div class="col-md-4 text-end">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/logo-gray.png'; ?>" class="icon-light" alt="">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/logo-gray-light.png'; ?>" class="icon-dark" alt="">

                        </div> -->
                    </div>
                </div>



                <div class="single-related-articles mb-5">
                    <h2 class="fs-1 theme-color font-jakarta text-center my-5">More Articles</h2>
                    <div class="related-articles-container">
                        <ul class="items-box-container column-3">
                            <?php
                            $categories = wp_get_post_categories(get_the_ID());
                            if ($categories) {
                                $args = array(
                                    'category__in'   => $categories,
                                    'post__not_in'   => array(get_the_ID()),
                                    'posts_per_page' => 3, // Number of related posts
                                );
                                $related_posts = new WP_Query($args);

                                if ($related_posts->have_posts()) {
                                    while ($related_posts->have_posts()) {
                                        $related_posts->the_post();
                                        $main_image = get_the_post_thumbnail_url();
                                        $hover_image = get_post_meta(get_the_ID(), '_blog_hover_image', true) ? get_post_meta(get_the_ID(), '_blog_hover_image', true) : get_template_directory_uri() . '/assets/images/blogs/blog-2.png';
                                        $blog_tags = get_post_meta(get_the_ID(), '_blog_tags', true);
                                        $blog_short_description = wp_trim_words(get_post_meta(get_the_ID(), '_blog_short_description', true), 20, '...');
                                        $blog_date = get_the_date('M j, Y');
                                        $blog_title = wp_trim_words(get_the_title(), 15, '...');
                                        $blog_permalink = get_the_permalink();
                                        $blog_categories = get_the_category();

                                        $category_names = array();

                                        if (strlen($blog_short_description) == 0) {
                                            $blog_short_description = wp_trim_words(get_the_content(), 20, '...');
                                        }


                                        if (count($blog_categories) > 0) {
                                            foreach ($blog_categories as $category_item) {

                                                $category_names[] = $category_item->name;
                                            }
                                        }
                            ?>

                                        <li class="item-box transparent-bg-control">
                                            <a href="<?php echo $blog_permalink; ?>" class="font-jakarta theme-color">
                                                <div class="item-top-image">
                                                    <img src="<?php echo $main_image; ?>" class="main-image" alt="">
                                                    <img src="<?php echo $hover_image; ?>" class="hover-image" alt="">
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center my-3">
                                                    <div class="tags-container">
                                                        <?php
                                                        if (strlen($blog_tags) == 0) {
                                                            foreach ($category_names as $category_name) {
                                                        ?>
                                                                <span class="tag theme-color transparent-bg-control">
                                                                    <?php echo $category_name; ?>
                                                                </span>
                                                            <?php
                                                            };
                                                        } else {
                                                            ?>
                                                            <span class="tag theme-color">
                                                                <?php echo $blog_tags; ?>
                                                            </span>
                                                        <?php

                                                        } ?>

                                                    </div>


                                                    <span><?php echo $blog_date; ?></span>
                                                </div>
                                                <div class="item-title mb-2 font-jakarta blog-heading-truncate">
                                                    <?php echo $blog_title; ?>
                                                </div>
                                                <p class="item-desc-text font-jakarta blog-desc-truncate"><?php echo $blog_short_description; ?></p>
                                            </a>
                                        </li>
                            <?php
                                    }
                                    echo '</ul>';
                                }
                                wp_reset_postdata();
                            }
                            ?>


                        </ul>
                    </div>
                </div>

                <a href="<?php echo site_url() . '/blog/'; ?>" class="career-backbtn-container d-flex align-items-center justify-content-start theme-color mt-3">
                    <span style="margin-right: 5px; line-height: 0;">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/career-back-button.png'; ?>" class="icon-light" alt="">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/career-back-button-dark.png'; ?>" class="icon-dark" alt="">
                    </span>
                    <span>Back to the Blogs</span>
                </a>
            </div>

        </div>
    </div>
</section>



<?php get_footer(); ?>