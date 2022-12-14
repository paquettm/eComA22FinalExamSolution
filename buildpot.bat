type nul > messages.po
ren index.php index.bak
"\Program Files (x86)\GnuWin32\bin\find" app/ -iname *.php -exec xgettext -j {} ; 2>&1
ren index.bak index.php
del messages.pot
ren messages.po messages.pot