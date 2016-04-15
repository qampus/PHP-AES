<?php

# CAVS 11.1
# Config info for aes_values
# AESVS MMT test data for CFB128
# State : Encrypt and Decrypt
# Key Length : 192
# Generated on Fri Apr 22 15:11:55 2011

namespace AES\Test;

use AES\CFB;
use AES\Key;

class CFB128MMT192 extends \PHPUnit_Framework_TestCase
{
    function encryptProvider()
    {
        return [
            ['1bbb30016d3a908827693352ece9833415433618b1d97595', 'b2b48e8d60240bf2d9fa05cc2f90c161', 'b4e499de51e646fad80030da9dc5e7e2', '8b7ba98982063a55fca3492269bbe437'],
            ['69f9d29885743826d7c5afc53637e6b1fa9512a10eea9ca9', '3743793c7144a755768437f4ef5a33c8', 'f84ebf42a758971c369949e288f775c9cf6a82ab51b286576b45652cd68c3ce6', 'a3bd28bb817bdb3f6492827f2aa3e6e134c254129d8f20dbc92389b7d89702d6'],
            ['9b4c9e6410828173019caad0a2cd13dce21f318bf8b428c3', '10ba56e67d96a0b25b71ec7461bc3b3b', '5174f3f2eec0e7c894955401ac4b7fde3f5169690121f6088f734e53f5b1842373ac76eb818df44c100e24e313ea2466', 'cd9967de6341671ddc172db19d0a1d432f57accfa6e931706f5f73caf78b4c8af0ad7ef9fe6a1e9b58b0fea85818b747'],
            ['4484cc09871c23ee5d4fa54dcba023c6c6bed7baf64448a6', 'a017d75afd41d915ca1fb17a131f648b', '477413f19b8015ba0a12043ed1feb8fd41e696dc7bf66e7878d2a4b94ccd8eaaab5c1e88accac119cd2d863e379883cc449275983fc7a6d16bfe1493464bcfb8', 'ae999a87b71ff778b1752df9c101cd3b072eb449f6c46578eb5b272844be0607831a89e937996b63d334c6cc159e2a065c9ef2858c66766c8d5c47706456b588'],
            ['91b7e6a205c6b3907be709a0528aecd949ffb733452f06f1', '38cd832d3ba1b0ee670ed385d94e8e25', 'b5ec2ea7afae2167e7da5bc2fd68811ad86ee5c6839ffeb73b12165cc64643c406629803cdc19cd6f3adfb8aa66b7c1902793397e113f8ccf5fb1823147a4ac3d2a2e4fb55d74ee3658eb740c35308a9', 'cdf42c51d7cf77fb5e8e9e98abb8a54ead22fccce9ec9d4049550e4fba48af42b03274f318e58a9df541a7e8d60a781239542fd4cb8dbdf7acf9e7401349e5f5118cdb5ee64b3d083cf65e67080f7b83'],
            ['1c9281744ae9171f3d6faa3ab3f88c5c34fd23e4f6efecea', '8ce3daf1ee9e451a6f6650176114fb34', '1105a24df28300e93f78d0af8cf668eefd6131bc5b2d58df66e9c6ee6d7d53b31db036d497edc0b2c5464b92edb96dfb86b2715e4bd207fd8fef3a05d05ca3fd8e6adc645d2e38963a85b1f01b562234ca17b72ff293a1997aea0e3c13d95859', '3e8787cc776f480890761418f5e408f630fbea7c504248f463e41ba22f993a0c7662cf9b58362afeade3743f027e63b12e8c9c33db1658f2a66df6400851f35843bcc240a1c12f453399bef1757608c778c5d9c15d4074e3a469c56e93b3e8d8'],
            ['68bb0d29ce68ae8c0bb7ed8a285e391f3bee720039555838', '13c78c4bd70b595e7106492d654389c2', '49172017ac70ca3a1bd9b0644c7c66a795a710675e727719d7a35c49e6ce0ce264c134aa881ff70ca34a3e1a0e864fd2615ca2a0e63def254e688c37a20ef6297cb3ae4c76d746b5e3d6bb41bd0d05d7df3eeded74351f4eb0ac801abe6dc10ef9b635055ee1dfbf4144d0e24057b03e', '29a4dff0abebae9648e1f609e7d47005a0dfa9bda922082d38df365c48320db28f9b7b4b00e98adc82ced09223532d44c9e46317529602b2603e208d275547a85f5713a4f07d6ec31755eb71b5aabf3433901f73cbfea640c589875d2b93c32a412f05a853059ecee7166bc8a4932f96'],
            ['76da852fa0b0494f3e1c6ee898db09cd0b6700594d25704b', '5cc5fafd42f3111a04a845c28016934e', '030de1c080d602272e63d76d498d2a487fdcacb2ae41dd3ef0082badd5085ebcef1d334194d84776df743795f80c06a5950cbf93c1e65b84dd06e46ae407dbd5f327d80d08f8705d09595bb109a5d664c82a475378dd2036c74b053019d331a41513164b64a04383b5fa8bea05bf642c1d1e8d195c8ff4fbb6c1d626fdd428d0', '0d8122ac2ab2368c98224b90c09627f6e7ddcba65cd7e512f77b314af08a784d9495f5904754aae146f81e06aa7b4f24166ac0c8a0fc2273138cdd67da1f60ac408189a1361db34792fb0d694af8267f5a5eaadd3e97174a3fd6bea63738f46f22c6b242d2481ea57b64127a8bc4e0cad7ca3fda5a90e345212fb38378bb2cbc'],
            ['dde0725789454bfd49304df0c7f1999c50f0064f8895723f', '3bdea6e648ef054fbbcd09b098797a3e', '8fd514121877b6d518dd905f7035ace68d06ffd63cb9e473c057c9c0239428a0c90dba3c4bcee7a4821780b9e160b04a089a307d97b8bb71406ec2212138608c509f9013b7b89e2222eddb1296ff954ee54c46b57f4e0c408b6559e536d6ecbb4b13005e053dc39521e70932361d423a49a4a9469c84bf29c8c4f8d30b75b476e3f270e7dc653e46a68d72e16abf9f56', 'b2e50639b70dee32815f25e9857701afed3dd63e1d241494f9aca87d88177ea91a205bfd1290b1d914a3fda5d8c02b69a64273af2c91c7ded314afcd80863ade8a6f595254b99925d088783f6f235b7ee0a90af95e1bbd0a4ac6b1c8e6fb6041343186f9069e9af1624af842d2466de0103e81fb5e608725010ef6fafaf69d256a7b7a038a649c027e8605152da92806'],
            ['affe25a7b28fe7427aa69a89cb87bc0fb68c940d63d319b3', '89e612f77ef55ee86935d90a8c7466c2', 'b5719702560b8b214c73b9a2ea7a43707b10e0b79152d1019ac4179fb4dae34ac3be4e0ac04d4a575462d87ea5587c4770caeed5589d13cd7d412bbb51334cb1a7c70f310d24894c5c907d0c8deecf10ce843c76d50249fe75c0796b6f48c32d8a14433ee699304a8d840e124b432512c0c73161b3885bdaa9ca6879b61f3107942e53faf2b227970ec6f559865f64966c1a3560983831aa42e660abd0c27c88', '5bc958b594f0e4928cee7c019ee1884bab9b6956f40c47f24c1b8ef587d68b175dbc36226b7d95e573702f5b0dc969a8c59b82816762847275c95234e3c74fba50841202c27264131ab03773b4e28ea7c68ea946efe2e2d9a89643d98c5dddd075098a930c741b535ba96ea0a08ad0cf68d11e8e98e26d0a79d3a5ef65dd137cc6c82a4e8edb1a63e9bc6e8705cef59b4b4c391924ffd33ace99808cc163272d']
        ];
    }

    function decryptProvider()
    {
        return [
            ['ecb55ffe3f5209c2eb9e6dfd46af1b90fa8fc5f1f2904623', '3e676d0a986a7308ae3cfea460d08687', '0d9db2153955148d3479a90f2d4d349f', '4c42e9650b1a288fa03ed205a6352f7d'],
            ['7413aee3e2fe9484482f1118abed66ae6c622365be423c2f', 'f37bacab2e94476d6b8c86744861053d', 'b210485ae530fc44549ada94e3b08ce020daace326d6cf76c150c2bcd2b3139c', 'b92cf89ab52013a061a192fc0b60aa46c415e4084a32d527d2507a24dc80a4b8'],
            ['caeee8b93d38608c4abe082416de59620d2733f53261d17d', 'c0cd2bebccbb6c49920bd5482ac756e8', 'bc01b40aec081aa00f2e3bc63ff61ac4b684dc7ae05f7c46b475c02845606c2494e7b5e8a9c8f8afe2b5ac658a9c960c', 'b7872a761fd09d4c60649454a099bb85081c6404299be361cd7f183339bf50676533f4619876e5758ba8d33f36602f5c'],
            ['a2621ee7c5eedad2e331760e3c3e49e8fa63f7c009afe8b2', '2bebd19cfa12e025798209811dac8751', 'efb41a379f1eaf41674fbb7fca14e7c4dd78270942e547b55a8bc71cb705e845d03a07f0f9822ad7920bd9357e7a2f85d7d5308cdfa05d993a46860c5bbbe015', 'a070b01f48ad5e440017c94c77cb3af654aef9094bce94796c75c5d6f66d2172d7231cc92ca273381f3b15166b82ee6dba8810422f3cb5e3ceeb42f40ae25675'],
            ['2b28a2d19ba9ecd149dae96622c21769b1927335f02aea51', '0cd6dccf5650a122b857415ee661acc9', '36161b4d67bacd9d82845d611b47a41b7cbbcb66a2726889890de94caaaf360bc1b29208d399c20570467213366ed4a596498ae8db8ec657679eb08a40ff084ecc0d0cfbd9ec9c02e0c19cc68b229aad', '5446fff3320239680c19a5519d3dfd3ab49f62300897f626eb0c9595e80c563850a9d361c6b974853abd42e6028ea4374852ccbdfca881c6885e413a5e8db53d4ffa727cee3bee0bb9ee1b4bdccb4a68'],
            ['9444991a091abdfeac81d706d58495b44cdaa39aaebb2aca', '1ea984af6c290566d777b0eee984faf2', '11aae8806d780f98c4d9fbe8d7d69d6f3b054afe08650e40d58a44f9e3fa638b98d61bbe2fbda1c0afed476b19ab4fc7e6e601d0b017fb79306bc9f06824b524213ce085984c920a75adcf79fcdd2be38724df6d34771b57db9c9e36438f8584', '4c4c359b46dc4d30fd9f9a1895a4deaf0566c711c52fea26385720a87f1db0ab67df050c99738cb3c9e74f36e7090025b8ecc627c58f62ca05ef4365ed5d7ae1a2d0fdeb8b5cf55c20deed4a20a7ebbb3f14869e29c9bdbc5bd22ced264bdb5b'],
            ['579dd4091464cd7216e109e48b5f389fc4bb510f896b83f3', '76b8af440963c7f356aba0942e2e31d2', '8c3019927901233f4f2216a895114460dd277b97eb2640481a1158b3fc408d0e41b3ae78daa7d82e5e67f401ac658108d28994922dc91c5ed2fa6b0f2de5f2dae89e4c820e117f8671de7e994967f2521d263925e745af9273682d9c08ced07d4a98fc985f68a0af512ebb56b33f1fa7', '5dba3a42779e60f594610ca7b48b1face6e335a9ed0d83677b705b619e76853bdd4130d5ab4ddb1c12e8bdb0b84f2999013e5c1aad56527cdca78ff482a11665886c356c52806ae419c906a38f0a4da7df49b818d528f926b5aa1fe107bfc2d6fbdb1a24c517eb9b075495bb723264fa'],
            ['5cd37a0f9e38067f5d165ddd4e599387af5967cae6f60e9b', '79d74d29105a3080444de5f56d7b9e3e', '151e5ad05d9830b8a21130c2abc4ee3f53accf0cd5af716746174700634184538d993b3612c6c4aeae216107526c212423c10513c6c862e4db2d86bcc7519e25b740d8a8e2e4c49e0e780043553e140c29759b3b9686a4b0c77e5702ccc0dcce9afc784f535bf92fc8fc559d3da48ea06cb1d8abcc50fe7112f002faf8f704f7', 'e1f3aabbdd40d63ae1f4f2ac1abe9284ebcadfc0df1542d8ef5ba5010f89ab584c8f2c09e4f495e7f55e4085fa5fd43a279c11eb3fa4cccc84d45956a39b9ba9c5693cde86d8bc2b68278bd4afe9d4a57ff479639b8a92b4f2c5268950aeb4fe513397bd45a27bfba94bd26ede389850d5320db3472e3533ad5c134162c224d0'],
            ['ec93891882b2c8c67df894c882045ede26a9008ab09ea067', 'd96a0dcd84afabee6e4335bfea402c51', '0a5d3e3ec164e844e49ba13bdf50d4f014e99c2124192d476a5a70b3c997eddca828eef83a04e1c90332ffba98812b2aa6791d083591bfa02ea3d7b41b9ce7cf2f7851d6866ebfe0ad67c24765b5ba00a402f527dd861bde817ec958c6d97c31a734b1012c084a30eb22340ccf544718186b6da7a36007aa6cd38cc751b473ab194454a0b43c4a62c44b9b2e5dc69b1d', '9fc3a98d8e1d00b85836b9b03d3399d671c11e7812efffc960312d2d59035977e44bfab83fb2cc7ef8abc2c65a8eea992fc8d817ca9bb4471a5da409342a4ae0a6d21a85de72a28d90b0338f2c57c518a8979a01f216e653e20b0050202ed5444c103a7379fc00054750999caa71ef4705b740f5678e5fbd78f91a56edf1687bd26082bc59cb744400653339f6fe6845'],
            ['dcc8702142b29e1529f23c5c3766464f6be0d2fbb16e4682', 'e0818769d77f2315924cf81a3691e275', '1a22b1bf5775d43c66f1a73084eeefdb3ed24cebd9e2bef2f05867165fb5930b6058f53ef4503353856fa6d2c99f5b1de9795da6e314365e2d1bb3719b23e830823b744e1ec406503183203fedf41ba014e16ca65e3425a51b0abfca1908160ac8f2b5589c79541bb3559fdfb894394a0732015211e994ae024a138aa20d267f79a640c23719259c530eaa1af128bc050993a414c6dc89612c06371afeda1f79', 'cb550111bf0a03eaf4f49af214fcc05a32972d7b4dede3e9812a27ef80d680188119ead562313e400fe0a0fffbb88c55a42bd681d5c93a8a61ba909058e62d99fa109cfd49935b150862a8aab2c301b9b0a9157c838491cd737af438cb66b1f20420200dbc56aa66552ce4be04cace4ace5bfbc617e3b27f40ec6dbc85a42b410dcb7ea0b78d472297d9b98875d636b8ef08c254ec9bd05bfda01bb38e8beb6a']
        ];
    }

    /**
     * @dataProvider encryptProvider
     */
    function testEncrypt($key, $iv, $plaintext, $ciphertext)
    {
        $key = new Key(hex2bin($key));
        $cfb = new CFB;
        $ctx = $cfb->initEncryption($key, hex2bin($iv));
        $result = $cfb->encrypt($ctx, hex2bin($plaintext));
        $this->assertSame(hex2bin($ciphertext), $result);
    }

    /**
     * @dataProvider decryptProvider
     */
    function testDecrypt($key, $iv, $ciphertext, $plaintext)
    {
        $key = new Key(hex2bin($key));
        $cfb = new CFB;
        $ctx = $cfb->initDecryption($key, hex2bin($iv));
        $result = $cfb->decrypt($ctx, hex2bin($ciphertext));
        $this->assertSame(hex2bin($plaintext), $result);
    }
}
