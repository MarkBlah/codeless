# Compare between two versions, using x.x.x format. Works well when comparing iOS and Android versions when implementing "Minimum Version" comparisons in database.

I've decided to write this because ip2long was not allowing uncompleted ip addresses 

Few gotchya's, 
May need to use bigint when storing in database.
I haven't tested behavior if digits are above 255


~/code/codeless/Compare_Android_iOS_Versions[master]$ php compare_android_ios_versions.php
Device Version = 4.4.4
Device Version3= 4.2.2
Device VersionI= 67240448
Min Version    = 4.4.4
Min Version    = 67372032
Calculation: 67372032 >= 67240448
Calculation: 4.4.4 >= 4.2.2
RESULT     : ACCEPTED


----------
Device Version = 4.2
Device Version3= 4.2.2
Device VersionI= 67240448
Min Version    = 4.2.0
Min Version    = 67239936
Calculation: 67239936 >= 67240448
Calculation: 4.2.0 >= 4.2.2
RESULT     : DENIED


