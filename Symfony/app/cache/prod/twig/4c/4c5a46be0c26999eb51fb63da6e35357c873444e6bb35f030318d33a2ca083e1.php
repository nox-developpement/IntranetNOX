<?php

/* support/include/PasswordHash.php */
class __TwigTemplate_71ec1258d4a6771dbc4325249e91088c1910f9c7e492e218156f45bc216c7d5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php
#
# Portable PHP password hashing framework.
#
# Version 0.3 / genuine.
#
# Written by Solar Designer <solar at openwall.com> in 2004-2006 and placed in
# the public domain.  Revised in subsequent years, still public domain.
#
# There's absolutely no warranty.
#
# The homepage URL for this framework is:
#
#\thttp://www.openwall.com/phpass/
#
# Please be sure to update the Version line if you edit this file in any way.
# It is suggested that you leave the main version number intact, but indicate
# your project name (after the slash) and add your own revision information.
#
# Please do not change the \"private\" password hashing method implemented in
# here, thereby making your hashes incompatible.  However, if you must, please
# change the hash type identifier (the \"\$P\$\") to something different.
#
# Obviously, since this code is in the public domain, the above are not
# requirements (there can be none), but merely suggestions.
#
class PasswordHash {
\tvar \$itoa64;
\tvar \$iteration_count_log2;
\tvar \$portable_hashes;
\tvar \$random_state;

\tfunction PasswordHash(\$iteration_count_log2, \$portable_hashes)
\t{
\t\t\$this->itoa64 = './0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

\t\tif (\$iteration_count_log2 < 4 || \$iteration_count_log2 > 31)
\t\t\t\$iteration_count_log2 = 8;
\t\t\$this->iteration_count_log2 = \$iteration_count_log2;

\t\t\$this->portable_hashes = \$portable_hashes;

\t\t\$this->random_state = microtime();
\t\tif (function_exists('getmypid'))
\t\t\t\$this->random_state .= getmypid();
\t}

\tfunction get_random_bytes(\$count)
\t{
\t\t\$output = '';
\t\tif (@is_readable('/dev/urandom') &&
\t\t    (\$fh = @fopen('/dev/urandom', 'rb'))) {
\t\t\t\$output = fread(\$fh, \$count);
\t\t\tfclose(\$fh);
\t\t}

\t\tif (strlen(\$output) < \$count) {
\t\t\t\$output = '';
\t\t\tfor (\$i = 0; \$i < \$count; \$i += 16) {
\t\t\t\t\$this->random_state =
\t\t\t\t    md5(microtime() . \$this->random_state);
\t\t\t\t\$output .=
\t\t\t\t    pack('H*', md5(\$this->random_state));
\t\t\t}
\t\t\t\$output = substr(\$output, 0, \$count);
\t\t}

\t\treturn \$output;
\t}

\tfunction encode64(\$input, \$count)
\t{
\t\t\$output = '';
\t\t\$i = 0;
\t\tdo {
\t\t\t\$value = ord(\$input[\$i++]);
\t\t\t\$output .= \$this->itoa64[\$value & 0x3f];
\t\t\tif (\$i < \$count)
\t\t\t\t\$value |= ord(\$input[\$i]) << 8;
\t\t\t\$output .= \$this->itoa64[(\$value >> 6) & 0x3f];
\t\t\tif (\$i++ >= \$count)
\t\t\t\tbreak;
\t\t\tif (\$i < \$count)
\t\t\t\t\$value |= ord(\$input[\$i]) << 16;
\t\t\t\$output .= \$this->itoa64[(\$value >> 12) & 0x3f];
\t\t\tif (\$i++ >= \$count)
\t\t\t\tbreak;
\t\t\t\$output .= \$this->itoa64[(\$value >> 18) & 0x3f];
\t\t} while (\$i < \$count);

\t\treturn \$output;
\t}

\tfunction gensalt_private(\$input)
\t{
\t\t\$output = '\$P\$';
\t\t\$output .= \$this->itoa64[min(\$this->iteration_count_log2 +
\t\t\t((PHP_VERSION >= '5') ? 5 : 3), 30)];
\t\t\$output .= \$this->encode64(\$input, 6);

\t\treturn \$output;
\t}

\tfunction crypt_private(\$password, \$setting)
\t{
\t\t\$output = '*0';
\t\tif (substr(\$setting, 0, 2) == \$output)
\t\t\t\$output = '*1';

\t\t\$id = substr(\$setting, 0, 3);
\t\t# We use \"\$P\$\", phpBB3 uses \"\$H\$\" for the same thing
\t\tif (\$id != '\$P\$' && \$id != '\$H\$')
\t\t\treturn \$output;

\t\t\$count_log2 = strpos(\$this->itoa64, \$setting[3]);
\t\tif (\$count_log2 < 7 || \$count_log2 > 30)
\t\t\treturn \$output;

\t\t\$count = 1 << \$count_log2;

\t\t\$salt = substr(\$setting, 4, 8);
\t\tif (strlen(\$salt) != 8)
\t\t\treturn \$output;

\t\t# We're kind of forced to use MD5 here since it's the only
\t\t# cryptographic primitive available in all versions of PHP
\t\t# currently in use.  To implement our own low-level crypto
\t\t# in PHP would result in much worse performance and
\t\t# consequently in lower iteration counts and hashes that are
\t\t# quicker to crack (by non-PHP code).
\t\tif (PHP_VERSION >= '5') {
\t\t\t\$hash = md5(\$salt . \$password, TRUE);
\t\t\tdo {
\t\t\t\t\$hash = md5(\$hash . \$password, TRUE);
\t\t\t} while (--\$count);
\t\t} else {
\t\t\t\$hash = pack('H*', md5(\$salt . \$password));
\t\t\tdo {
\t\t\t\t\$hash = pack('H*', md5(\$hash . \$password));
\t\t\t} while (--\$count);
\t\t}

\t\t\$output = substr(\$setting, 0, 12);
\t\t\$output .= \$this->encode64(\$hash, 16);

\t\treturn \$output;
\t}

\tfunction gensalt_extended(\$input)
\t{
\t\t\$count_log2 = min(\$this->iteration_count_log2 + 8, 24);
\t\t# This should be odd to not reveal weak DES keys, and the
\t\t# maximum valid value is (2**24 - 1) which is odd anyway.
\t\t\$count = (1 << \$count_log2) - 1;

\t\t\$output = '_';
\t\t\$output .= \$this->itoa64[\$count & 0x3f];
\t\t\$output .= \$this->itoa64[(\$count >> 6) & 0x3f];
\t\t\$output .= \$this->itoa64[(\$count >> 12) & 0x3f];
\t\t\$output .= \$this->itoa64[(\$count >> 18) & 0x3f];

\t\t\$output .= \$this->encode64(\$input, 3);

\t\treturn \$output;
\t}

\tfunction gensalt_blowfish(\$input)
\t{
\t\t# This one needs to use a different order of characters and a
\t\t# different encoding scheme from the one in encode64() above.
\t\t# We care because the last character in our encoded string will
\t\t# only represent 2 bits.  While two known implementations of
\t\t# bcrypt will happily accept and correct a salt string which
\t\t# has the 4 unused bits set to non-zero, we do not want to take
\t\t# chances and we also do not want to waste an additional byte
\t\t# of entropy.
\t\t\$itoa64 = './ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

\t\t\$output = '\$2a\$';
\t\t\$output .= chr(ord('0') + \$this->iteration_count_log2 / 10);
\t\t\$output .= chr(ord('0') + \$this->iteration_count_log2 % 10);
\t\t\$output .= '\$';

\t\t\$i = 0;
\t\tdo {
\t\t\t\$c1 = ord(\$input[\$i++]);
\t\t\t\$output .= \$itoa64[\$c1 >> 2];
\t\t\t\$c1 = (\$c1 & 0x03) << 4;
\t\t\tif (\$i >= 16) {
\t\t\t\t\$output .= \$itoa64[\$c1];
\t\t\t\tbreak;
\t\t\t}

\t\t\t\$c2 = ord(\$input[\$i++]);
\t\t\t\$c1 |= \$c2 >> 4;
\t\t\t\$output .= \$itoa64[\$c1];
\t\t\t\$c1 = (\$c2 & 0x0f) << 2;

\t\t\t\$c2 = ord(\$input[\$i++]);
\t\t\t\$c1 |= \$c2 >> 6;
\t\t\t\$output .= \$itoa64[\$c1];
\t\t\t\$output .= \$itoa64[\$c2 & 0x3f];
\t\t} while (1);

\t\treturn \$output;
\t}

\tfunction HashPassword(\$password)
\t{
\t\t\$random = '';

\t\tif (CRYPT_BLOWFISH == 1 && !\$this->portable_hashes) {
\t\t\t\$random = \$this->get_random_bytes(16);
\t\t\t\$hash =
\t\t\t    crypt(\$password, \$this->gensalt_blowfish(\$random));
\t\t\tif (strlen(\$hash) == 60)
\t\t\t\treturn \$hash;
\t\t}

\t\tif (CRYPT_EXT_DES == 1 && !\$this->portable_hashes) {
\t\t\tif (strlen(\$random) < 3)
\t\t\t\t\$random = \$this->get_random_bytes(3);
\t\t\t\$hash =
\t\t\t    crypt(\$password, \$this->gensalt_extended(\$random));
\t\t\tif (strlen(\$hash) == 20)
\t\t\t\treturn \$hash;
\t\t}

\t\tif (strlen(\$random) < 6)
\t\t\t\$random = \$this->get_random_bytes(6);
\t\t\$hash =
\t\t    \$this->crypt_private(\$password,
\t\t    \$this->gensalt_private(\$random));
\t\tif (strlen(\$hash) == 34)
\t\t\treturn \$hash;

\t\t# Returning '*' on error is safe here, but would _not_ be safe
\t\t# in a crypt(3)-like function used _both_ for generating new
\t\t# hashes and for validating passwords against existing hashes.
\t\treturn '*';
\t}

\tfunction CheckPassword(\$password, \$stored_hash)
\t{
\t\t\$hash = \$this->crypt_private(\$password, \$stored_hash);
\t\tif (\$hash[0] == '*')
\t\t\t\$hash = crypt(\$password, \$stored_hash);

\t\treturn \$hash == \$stored_hash;
\t}
}

?>
";
    }

    public function getTemplateName()
    {
        return "support/include/PasswordHash.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/PasswordHash.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\PasswordHash.php");
    }
}
