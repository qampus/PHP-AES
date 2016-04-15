<?php

# CAVS 11.1
# Config info for aes_values
# AESVS MCT test data for OFB
# State : Encrypt and Decrypt
# Key Length : 128
# Generated on Fri Apr 22 15:11:59 2011

namespace AES\Test;

use AES\OFB;
use AES\Key;

class OFBMCT128 extends \PHPUnit_Framework_TestCase
{
    function encryptProvider()
    {
        return [
            ['89f6806368c130627a98bfb6bb5b1fd7', 'b24d13affed86717df32a5b43fa9b859', '056f3063170450a5ac72c15caa54c690', 'b0e7562dac92f90d5935c57baf336204'],
            ['3911d64ec453c96f23ad7acd14687dd3', 'b0e7562dac92f90d5935c57baf336204', 'f7a15088e12759d69c688638c207224d', 'daa753afdef136565d051f4c651eda8d'],
            ['e3b685e11aa2ff397ea865817176a75e', 'daa753afdef136565d051f4c651eda8d', '86cfc4e5075c61702322918f229b9cf7', '3bc92d7999448ab838609be1f5e1beab'],
            ['d87fa89883e6758146c8fe60849719f5', '3bc92d7999448ab838609be1f5e1beab', '85bb52fb90677a73d5c1b23095515ed1', 'd9255c5447645cc8ca5838e3d7719b78'],
            ['015af4ccc48229498c90c68353e6828d', 'd9255c5447645cc8ca5838e3d7719b78', 'cd6bb13ed927ce45cfcfdd77d7d23b42', 'a9226e4c9f172e721725c414e8e865b2'],
            ['a8789a805b95073b9bb50297bb0ee73f', 'a9226e4c9f172e721725c414e8e865b2', '4b53296498da0cf82fbcd00cd6b34743', '87c8e2671c1aed679e5f1f9d75b892fe'],
            ['2fb078e7478fea5c05ea1d0aceb675c1', '87c8e2671c1aed679e5f1f9d75b892fe', 'a6e3f89b7f5143850f68677184046ef2', 'af2368bab3733a97e135d84e12286f07'],
            ['8093105df4fcd0cbe4dfc544dc9e1ac6', 'af2368bab3733a97e135d84e12286f07', 'ac5e07b35ad79cd50f4a2b2863fb3834', '6bbd9bb9c27e82ad804654e8f0a7294e'],
            ['eb2e8be436825266649991ac2c393388', '6bbd9bb9c27e82ad804654e8f0a7294e', 'a0d58adbbbd89eae94aa5e36c834d042', '16fe51e0c4b5e66ffdf5a50335f80009'],
            ['fdd0da04f237b409996c34af19c13381', '16fe51e0c4b5e66ffdf5a50335f80009', '774fa84d1193bebe49a78ec4e848b19b', '4f62e80052b90810259e5c3faf1377d2'],
            ['b2b23204a08ebc19bcf26890b6d24453', '4f62e80052b90810259e5c3faf1377d2', '4f1fc019a3787bec7e8b60dc050a280e', '3dde69a04a225505b3a838108e46d84f'],
            ['8f6c5ba4eaace91c0f5a508038949c1c', '3dde69a04a225505b3a838108e46d84f', '17224ea2f24865694738c71bb66d2852', '4c4df0c89fcfa4a041caf4c119cfe10e'],
            ['c321ab6c75634dbc4e90a441215b7d12', '4c4df0c89fcfa4a041caf4c119cfe10e', '42c0270b257d85607d89cbdd760b7592', '7317c4106743e7518b182c8b3357c678'],
            ['b0366f7c1220aaedc58888ca120cbb6a', '7317c4106743e7518b182c8b3357c678', '34737950e3b38630e454ced9f3fd9ef2', 'b757b614c2c458ed9786294a0891d0f2'],
            ['0761d968d0e4f200520ea1801a9d6b98', 'b757b614c2c458ed9786294a0891d0f2', '264baa06d4612e1ec7d0e4c2ee17f778', 'd78365a46cc7c4caf604ae8a207b61fa'],
            ['d0e2bcccbc2336caa40a0f0a3ae60a62', 'd78365a46cc7c4caf604ae8a207b61fa', '9507673352e0ecd7b2b63a86374020ff', 'eeae586a77950f355ec5337bdfc357af'],
            ['3e4ce4a6cbb639fffacf3c71e5255dcd', 'eeae586a77950f355ec5337bdfc357af', 'fe2978821be39677a142cdeea9f21bf9', '810098d9edf127da39ec7b71792a5490'],
            ['bf4c7c7f26471e25c32347009c0f095d', '810098d9edf127da39ec7b71792a5490', '407c1dccb75f0fc1a1ff262701fd92b9', 'a5872b19a941d64c65a29b2f4d9f000d'],
            ['1acb57668f06c869a681dc2fd1900950', 'a5872b19a941d64c65a29b2f4d9f000d', 'fd77815c12c67bbb1981aba6f897be13', '75a5deb9e10b4961f41ee1aed2facf46'],
            ['6f6e89df6e0d8108529f3d81036ac616', '75a5deb9e10b4961f41ee1aed2facf46', '297f51902ebe38ce4a32dbb43e43b76e', 'b79f23e79fa557b1a97e92eb2b5c16c4'],
            ['d8f1aa38f1a8d6b9fbe1af6a2836d0d2', 'b79f23e79fa557b1a97e92eb2b5c16c4', 'f28bf56cb3d4c9b5eb331b6082680e38', '8a045e48e350078711ab47861450d7d9'],
            ['52f5f47012f8d13eea4ae8ec3c66070b', '8a045e48e350078711ab47861450d7d9', 'd4953c9122632c8c154eb63ea2005bc2', 'ad02cf1e38037c360dfe084c76f70de0'],
            ['fff73b6e2afbad08e7b4e0a04a910aeb', 'ad02cf1e38037c360dfe084c76f70de0', '0f44c69cfd40fe061f899c1c9956ed3c', 'fed51f5a54bc3623d496553cab9117db'],
            ['012224347e479b2b3322b59ce1001d30', 'fed51f5a54bc3623d496553cab9117db', '87d59eb3bd174ede2ca0e29e3b8c9097', 'cd2b17e0712b4d953d783f7beb1842dc'],
            ['cc0933d40f6cd6be0e5a8ae70a185fec', 'cd2b17e0712b4d953d783f7beb1842dc', '1d4b378b9c4eb624dd756bf272c9c1ae', 'fa276a29b1fb0b4871bb174e7103973b'],
            ['362e59fdbe97ddf67fe19da97b1bc8d7', 'fa276a29b1fb0b4871bb174e7103973b', 'a642af65ea004dfbbac734bdb91e7542', 'd22e6c74a3997ba113158bc293be55fb'],
            ['e40035891d0ea6576cf4166be8a59d2c', 'd22e6c74a3997ba113158bc293be55fb', 'f682c5a4e92e4ce6f56e554e90f1a066', '7583197174a5d11ad1765866779a2998'],
            ['91832cf869ab774dbd824e0d9f3fb4b4', '7583197174a5d11ad1765866779a2998', 'aa02f2101694e352f0ce14a0c033499c', 'c181bd409d8397dc701b5ef4da5926db'],
            ['500291b8f428e091cd9910f94566926f', 'c181bd409d8397dc701b5ef4da5926db', 'b5a12be121cc582d3c42c567cb9d6df9', 'fe6e64bebbb27e448298cffce8eab5f3'],
            ['ae6cf5064f9a9ed54f01df05ad8c279c', 'fe6e64bebbb27e448298cffce8eab5f3', '0f13d0bdc19666f61403759c41430785', '76dc0da2d9408000777607eacc710de1'],
            ['d8b0f8a496da1ed53877d8ef61fd2a7d', '76dc0da2d9408000777607eacc710de1', '8ab345aca6d226385e92556ab11f73dc', '79a5a1d548bc6aa99b1b6ec68d2989a0'],
            ['a1155971de66747ca36cb629ecd4a3dd', '79a5a1d548bc6aa99b1b6ec68d2989a0', '14244bfdde4834f7c7ebace2e21e0efb', 'ad1554ce804d9376d3477a3c261f812b'],
            ['0c000dbf5e2be70a702bcc15cacb22f6', 'ad1554ce804d9376d3477a3c261f812b', '8880f4b7c78e0384a2c4e670ad13f50a', 'acec280cd222dafa7c10e621f4fcf0bf'],
            ['a0ec25b38c093df00c3b2a343e37d249', 'acec280cd222dafa7c10e621f4fcf0bf', '0fbb8fd9687057dc0b41fc944b4732b0', '166cca4cb16c05917fff2c9064b8c779'],
            ['b680efff3d65386173c406a45a8f1530', '166cca4cb16c05917fff2c9064b8c779', '2757c6bb6397b34df691f56c1a82effe', '462a9327b41960999ec6714c789ea8be'],
            ['f0aa7cd8897c58f8ed0277e82211bd8e', '462a9327b41960999ec6714c789ea8be', 'ece99b46a17a02454d77707596b8f229', '7c4e9f96e41f4295eb1198e7db0b917d'],
            ['8ce4e34e6d631a6d0613ef0ff91a2cf3', '7c4e9f96e41f4295eb1198e7db0b917d', 'a3ccd973c06879f4f35a0b0431fa7415', '230fab46ad33bbd0e4330f6c0f4cfa27'],
            ['afeb4808c050a1bde220e063f656d6d4', '230fab46ad33bbd0e4330f6c0f4cfa27', '991065a53a110bc4086ea13f57ed87c2', '22fcda6641c9fae985535195fbdf2cfe'],
            ['8d17926e81995b546773b1f60d89fa2a', '22fcda6641c9fae985535195fbdf2cfe', '6f4efec9a69101c85eba297988f5a8e9', '6ff82c050e55b56399b26534786448a9'],
            ['e2efbe6b8fccee37fec1d4c275edb283', '6ff82c050e55b56399b26534786448a9', '5914a49524014c3f5960f3a591afb9dd', '4b222a9c06b14e0f922c968bd7161b42'],
            ['a9cd94f7897da0386ced4249a2fba9c1', '4b222a9c06b14e0f922c968bd7161b42', '48f8f591df3b48ac24918552d2e7590e', 'a9651991c2f08ebac6a9695020e43741'],
            ['00a88d664b8d2e82aa442b19821f9e80', 'a9651991c2f08ebac6a9695020e43741', '4d1834b43813a49e61978b44416e0f7a', '9cbdf285e4d67072428c81138b8ed221'],
            ['9c157fe3af5b5ef0e8c8aa0a09914ca1', '9cbdf285e4d67072428c81138b8ed221', '38f5d679bb274e535cb2e8d4ad2db923', 'd3f6e964b2c1d98cf2c6c17dca6c7c19'],
            ['4fe396871d9a877c1a0e6b77c3fd30b8', 'd3f6e964b2c1d98cf2c6c17dca6c7c19', 'a38e6aa9af05b199a7da366aed545ce6', '2d540d8795b9b86415d8c7387fcf6f04'],
            ['62b79b0088233f180fd6ac4fbc325fbc', '2d540d8795b9b86415d8c7387fcf6f04', 'a738fc50a72e67d5db7bac31af2120a1', '6d1ed4ba9a522741cbbe7d2669123509'],
            ['0fa94fba12711859c468d169d5206ab5', '6d1ed4ba9a522741cbbe7d2669123509', '81d722e8a584d2e327812fe3cd1db23c', '9d74be45831bf1f8a4174a084408c62c'],
            ['92ddf1ff916ae9a1607f9b619128ac99', '9d74be45831bf1f8a4174a084408c62c', '01077d02bc7647f9c10e3d111231889a', 'b54a223aff3c472056fa7e6d47505b64'],
            ['2797d3c56e56ae813685e50cd678f7fd', 'b54a223aff3c472056fa7e6d47505b64', 'cc0f4bdf8cea28af083e0129c428ff2b', '5ea83e9198b4995de9d4a19cb1726f18'],
            ['793fed54f6e237dcdf514490670a98e5', '5ea83e9198b4995de9d4a19cb1726f18', 'dda18e4b2c1dea6350e7f5a5cebe0d19', '4dde82e443be7be0d3de1a700107b79c'],
            ['34e16fb0b55c4c3c0c8f5ee0660d2f79', '4dde82e443be7be0d3de1a700107b79c', 'db25a75688b5bc2cf85d3ca3b278efb4', '025c06836986b29ab6b696d8a19f7227'],
            ['36bd6933dcdafea6ba39c838c7925d5e', '025c06836986b29ab6b696d8a19f7227', 'd2ea9b3cfd6da0aad32b71cdcdc39b1e', '0289cead0ff47cae8039f3eff3379eef'],
            ['3434a79ed32e82083a003bd734a5c3b1', '0289cead0ff47cae8039f3eff3379eef', '95447f2de33b4359a9f3979cd61c09ff', 'd06fbb9552c4a0057911936a18880bb8'],
            ['e45b1c0b81ea220d4311a8bd2c2dc809', 'd06fbb9552c4a0057911936a18880bb8', 'b59be96882f9a9cc2ebc239fbdc06639', 'f50aa2a64a92784934c443feebc0ef4b'],
            ['1151beadcb785a4477d5eb43c7ed2742', 'f50aa2a64a92784934c443feebc0ef4b', '593812583584fd7e886c3744f47ad20d', '2f31af54bf286d830a56ebe281c91341'],
            ['3e6011f9745037c77d8300a146243403', '2f31af54bf286d830a56ebe281c91341', 'd6f6ab461a4a8886c5b89dae43f424f6', '915da3460deab9c28060520431055741'],
            ['af3db2bf79ba8e05fde352a577216342', '915da3460deab9c28060520431055741', '6950121482ce6d309bd77b67ddaa3134', '9828729dc39bbba275355936b3c75b51'],
            ['3715c022ba2135a788d60b93c4e63813', '9828729dc39bbba275355936b3c75b51', 'a09863c3f289f7f600d62ff3e613acbb', '0f1412ce0c17039dec34577a8812350d'],
            ['3801d2ecb636363a64e25ce94cf40d1e', '0f1412ce0c17039dec34577a8812350d', '3c0e3b7cd1393ed2b4b8937b31295375', '16c45015cdadb5e985b0bdcf02877c62'],
            ['2ec582f97b9b83d3e152e1264e73717c', '16c45015cdadb5e985b0bdcf02877c62', 'f10c0ea24843840f249ce2346e406c85', 'a99a5e4cde34eaf31e0c288f8ce66b53'],
            ['875fdcb5a5af6920ff5ec9a9c2951a2f', 'a99a5e4cde34eaf31e0c288f8ce66b53', 'e715d2e6ed351fbe38a0c3b13cd7e70f', 'c37666dc9252692ea16014aca349e81e'],
            ['4429ba6937fd000e5e3edd0561dcf231', 'c37666dc9252692ea16014aca349e81e', '468942aa1b49526d164a8d27f6a51a8f', '30eed137193c7e7c78d40eb4563343f2'],
            ['74c76b5e2ec17e7226ead3b137efb1c3', '30eed137193c7e7c78d40eb4563343f2', 'a6a69a3df62963ee589336d273d3bc24', '7aa43c25d8b1b12076a05d66e18dc26f'],
            ['0e63577bf670cf52504a8ed7d66273ac', '7aa43c25d8b1b12076a05d66e18dc26f', 'ecdb836f82c8b58306c106860f1a2642', '08b871a7b83b5453d7f47ec6b342520a'],
            ['06db26dc4e4b9b0187bef011652021a6', '08b871a7b83b5453d7f47ec6b342520a', '9a14c576a62636a451bcdc841204ac29', '6d0d80cf2fcbaa5b9d89d607572d584f'],
            ['6bd6a6136180315a1a372616320d79e9', '6d0d80cf2fcbaa5b9d89d607572d584f', '2cedd4b152bcea3c26551a195c9b5936', '9926ae8f30eacd90cdf81d9a45fe3b84'],
            ['f2f0089c516afccad7cf3b8c77f3426d', '9926ae8f30eacd90cdf81d9a45fe3b84', '3fb8abb431ec54b70dbdec52267162d4', '2ae89cfc33f1220eb70c755943f5ccd6'],
            ['d8189460629bdec460c34ed534068ebb', '2ae89cfc33f1220eb70c755943f5ccd6', '63555f1f938cf2a2f10cfd9de3d3809e', 'e34fb86f763ebc3603f86c7db82cac36'],
            ['3b572c0f14a562f2633b22a88c2a228d', 'e34fb86f763ebc3603f86c7db82cac36', '3838e37db47709dd5105e949f00bbd3c', 'de59a95e77aeecd9e01a3e4a480d4862'],
            ['e50e8551630b8e2b83211ce2c4276aef', 'de59a95e77aeecd9e01a3e4a480d4862', 'c09a198bc2bacf226c6e6d8d048ff8f4', 'f4e17a917df0a7dda47501b3c168ad82'],
            ['11efffc01efb29f627541d51054fc76d', 'f4e17a917df0a7dda47501b3c168ad82', '4a143869a1cdacfe84e6fba682c8552a', '449721ce7669d00f28707ed27a9cc910'],
            ['5578de0e6892f9f90f2463837fd30e7d', '449721ce7669d00f28707ed27a9cc910', 'fb65cad9c6d19d355339c6e2b789728e', 'b56720f70e5fb8b61b4e20af6655c2c2'],
            ['e01ffef966cd414f146a432c1986ccbf', 'b56720f70e5fb8b61b4e20af6655c2c2', 'deb69b0d26137fae647ba2809d10fb88', '1a6b18afb6527c7443bbb8421f65dc9f'],
            ['fa74e656d09f3d3b57d1fb6e06e31020', '1a6b18afb6527c7443bbb8421f65dc9f', 'aaea916f1840f662b91ee7d2f3aa1906', '9bff53fa4ceeb994486577a83b07fdf7'],
            ['618bb5ac9c7184af1fb48cc63de4edd7', '9bff53fa4ceeb994486577a83b07fdf7', '9d538b77cdd1fa1557b00a67e3b6437a', '27938f3788dbb7680a7964768b5ba359'],
            ['46183a9b14aa33c715cde8b0b6bf4e8e', '27938f3788dbb7680a7964768b5ba359', '78406e0df38c80d06caf58c9c1786382', '85007a82bb14bb263761d1a028cdd0f7'],
            ['c3184019afbe88e122ac39109e729e79', '85007a82bb14bb263761d1a028cdd0f7', '341e5a2866900c646abeeeb813714401', 'f647041f7298ce433cd0472e39c2d619'],
            ['355f4406dd2646a21e7c7e3ea7b04860', 'f647041f7298ce433cd0472e39c2d619', 'de00e5fc8aee4544bcab4299f8cadc12', '2dac727a62754fbe8c1edb025f32c55a'],
            ['18f3367cbf53091c9262a53cf8828d3a', '2dac727a62754fbe8c1edb025f32c55a', '029c142b8ce5cea403e94531a256b582', '5ee39e3799033bc39fffee70aa6a7db9'],
            ['4610a84b265032df0d9d4b4c52e8f083', '5ee39e3799033bc39fffee70aa6a7db9', 'b3eb6ec6de36ba5318cf2949f38ee11e', 'b904959334d913be4b79b9ad47cec832'],
            ['ff143dd81289216146e4f2e1152638b1', 'b904959334d913be4b79b9ad47cec832', '3c126964b2045436b9e130b5d7205e18', '6b04c3a1f007d4fe1d8ed1fb36f652d9'],
            ['9410fe79e28ef59f5b6a231a23d06a68', '6b04c3a1f007d4fe1d8ed1fb36f652d9', 'c6ee16f62fd20d3ab8d8f894232cef1f', '07f21f21f33536c37dee7a7f531a4d0f'],
            ['93e2e15811bbc35c2684596570ca2767', '07f21f21f33536c37dee7a7f531a4d0f', 'a9c79c44b4887d48047293d5718e8331', 'e2b411e1ce4e979335acd3c3aae5ffb5'],
            ['7156f0b9dff554cf13288aa6da2fd8d2', 'e2b411e1ce4e979335acd3c3aae5ffb5', 'cd224c536502bb4e147fdc4318fd5028', '99f6439fa87845b4ea6a0d5e855364f1'],
            ['e8a0b326778d117bf94287f85f7cbc23', '99f6439fa87845b4ea6a0d5e855364f1', '0c4884cd78cb8b27c94dcdb6d1d763d3', 'a179e98f6482272d42833711b26a2405'],
            ['49d95aa9130f3656bbc1b0e9ed169826', 'a179e98f6482272d42833711b26a2405', '3c21413fbf88bbe9a44a879a1e6ccc48', '1aa0ddb747463503fb3e6fba867fc0a6'],
            ['5379871e5449035540ffdf536b695880', '1aa0ddb747463503fb3e6fba867fc0a6', '2e20a414c1f1814a8bedebf8d82ae5ee', 'ffd296392a781e07369a338d7e4223c4'],
            ['acab11277e311d527665ecde152b7b44', 'ffd296392a781e07369a338d7e4223c4', 'c8672cdd50e9e639ae61f0c75a0275f1', '8d227af253876502bb5e21f70d9cf1b1'],
            ['21896bd52db67850cd3bcd2918b78af5', '8d227af253876502bb5e21f70d9cf1b1', '0dd33071d2034594c9f60459eb098065', '7b2b6edaf0b4c03a88781d533d8137cb'],
            ['5aa2050fdd02b86a4543d07a2536bd3e', '7b2b6edaf0b4c03a88781d533d8137cb', 'd6e524305f72a50d901ec2b4cb8a39ca', '1e7bb07a4680901ef7e3827ea3522b5b'],
            ['44d9b5759b822874b2a0520486649665', '1e7bb07a4680901ef7e3827ea3522b5b', 'd39d633382fe6fabaf4bb2633dd5ed6a', '37a44c2df5255a29c66bfd8439cb9842'],
            ['737df9586ea7725d74cbaf80bfaf0e27', '37a44c2df5255a29c66bfd8439cb9842', '588f9bd86d9aa8ad9cb34905bb17dca8', '6ae8c4b4e112db8c940c58e8aee16fd7'],
            ['19953dec8fb5a9d1e0c7f768114e61f0', '6ae8c4b4e112db8c940c58e8aee16fd7', '5840b5e60d3d64e992b2133da520ddb0', '6e5b0a8de191370a6d2fa5a00c92beec'],
            ['77ce37616e249edb8de852c81ddcdf1c', '6e5b0a8de191370a6d2fa5a00c92beec', '819b01913333e890736bfe839ba77e67', '5cbde030d083a7ba7c337dbdda9fb814'],
            ['2b73d751bea73961f1db2f75c7436708', '5cbde030d083a7ba7c337dbdda9fb814', '515b49c53ba8f5426ac47a6708487f30', 'da5bc7516308ae65f88526ad116b4982'],
            ['f1281000ddaf9704095e09d8d6282e8a', 'da5bc7516308ae65f88526ad116b4982', 'c33897f2681240f36ab104f231249c58', '905189947a2ee56c1b30cd9fbbb35685'],
            ['61799994a7817268126ec4476d9b780f', '905189947a2ee56c1b30cd9fbbb35685', '05aa7ea4bd4b49ab01c4a6e38993c7be', '6a32280f991ea0aa7a11e1d1d6b9423d'],
            ['0b4bb19b3e9fd2c2687f2596bb223a32', '6a32280f991ea0aa7a11e1d1d6b9423d', '8c33e01e922f26a5713e148178927fff', '4d873f786fb2b60c2b1ae747b9033030'],
            ['46cc8ee3512d64ce4365c2d102210a02', '4d873f786fb2b60c2b1ae747b9033030', 'f25fa0dcbc60b8b8082a54149dd463c6', '92531b7fe446d07ce5e338baf58ae9f6'],
            ['d49f959cb56bb4b2a686fa6bf7abe3f4', '92531b7fe446d07ce5e338baf58ae9f6', '2fdcf6d34946a7d79b7801748003f4d4', '592e5e157a1633083c6ab905eebc3ff9'],
            ['8db1cb89cf7d87ba9aec436e1917dc0d', '592e5e157a1633083c6ab905eebc3ff9', '1aacbde6e461e77dc000ef151ebf089e', '6754f2521b14154819b1b4f2a98a89fa']
        ];
    }

    function decryptProvider()
    {
        return [
            ['6ec8f8db4b5eec1f64a799c1bb29b9aa', 'b2321765f48eddc7f84b9423a540003c', '0dda834adaec203904d288f43263c4b7', '9c1037b77f32bd314929cea95a39bcdc'],
            ['f2d8cf6c346c512e2d8e5768e1100576', '9c1037b77f32bd314929cea95a39bcdc', '1d4c9d0675f0fd0fc843e83dafe6571e', '669d8cf0914b9fccf60367a28eba7248'],
            ['9445439ca527cee2db8d30ca6faa773e', '669d8cf0914b9fccf60367a28eba7248', '887a1198a7658b4cba5c6d02f4c6637d', '590c69bd9eeb15158139a98c1e281199'],
            ['cd492a213bccdbf75ab49946718266a7', '590c69bd9eeb15158139a98c1e281199', 'fa4c515bfd9e5b2cba0268f1edf2287e', '6c62c3e1de88a252d20067779c44cdbb'],
            ['a12be9c0e54479a588b4fe31edc6ab1c', '6c62c3e1de88a252d20067779c44cdbb', '6503e5a55cef5644704a38fa8870a30d', '5368a980330fa54a3fc213f0aa599e8b'],
            ['f2434040d64bdcefb776edc1479f3597', '5368a980330fa54a3fc213f0aa599e8b', 'fc902b8f1b77f35a201c99ae0f7e422e', '187172a7fe2abc92bc053ba2f26d795f'],
            ['ea3232e72861607d0b73d663b5f24cc8', '187172a7fe2abc92bc053ba2f26d795f', '2b09bf758ee24c2699aa141103d044b0', '17fb8dcc1d83de89182ea18ac95e0dca'],
            ['fdc9bf2b35e2bef4135d77e97cac4102', '17fb8dcc1d83de89182ea18ac95e0dca', '00fc0a8008c99ade4abccc62cd9adc8f', '0995691264cc8384047500ff3396d949'],
            ['f45cd639512e3d70172877164f3a984b', '0995691264cc8384047500ff3396d949', 'ff1e48beec4d3def5590c3bd251aa668', 'c18953054ae2a91c39cc4be3e93040b4'],
            ['35d5853c1bcc946c2ee43cf5a60ad8ff', 'c18953054ae2a91c39cc4be3e93040b4', '616e075ffa9433643cf8a80d63dbb751', '98c83d82211ee0728a423d77c7443cbc'],
            ['ad1db8be3ad2741ea4a60182614ee443', '98c83d82211ee0728a423d77c7443cbc', '4184ede92edc141ba19914df65b6b733', '6b8e6be649e71ad8cd3f774f0f4b54cb'],
            ['c693d35873356ec6699976cd6e05b088', '6b8e6be649e71ad8cd3f774f0f4b54cb', '47d0f8c2d5b53d73839c7ff2b0aff4a7', 'f415a742fd9fcea7569d7f4183ef1162'],
            ['3286741a8eaaa0613f04098cedeaa1ea', 'f415a742fd9fcea7569d7f4183ef1162', '60055e6867d33ec263fcc9ed31fb5401', 'a1f967f01b3007a1e349548caaa500c5'],
            ['937f13ea959aa7c0dc4d5d00474fa12f', 'a1f967f01b3007a1e349548caaa500c5', 'e5317fc20cf2411f09e83d4046e0b991', 'b9a36b32e8792f631409a72f57150acc'],
            ['2adc78d87de388a3c844fa2f105aabe3', 'b9a36b32e8792f631409a72f57150acc', 'f117f88974c31a56622be017fde1cd08', 'f2f42cdbabeb65be2d6acfe57df5fa0b'],
            ['d8285403d608ed1de52e35ca6daf51e8', 'f2f42cdbabeb65be2d6acfe57df5fa0b', 'be796fc48b4a6f09686de6cb24966ab5', 'ff04ede8bbd8fc5dc65ee7727e916c81'],
            ['272cb9eb6dd011402370d2b8133e3d69', 'ff04ede8bbd8fc5dc65ee7727e916c81', '5c072db8b8c5df0eeb10669c9e08e619', '6c556300164f8f63a565d7d4faf85fcf'],
            ['4b79daeb7b9f9e238615056ce9c662a6', '6c556300164f8f63a565d7d4faf85fcf', '296cb3abe5616c328f7390f1f3dcac0b', '221a1bcfe02af577f19d504d826e8f74'],
            ['6963c1249bb56b54778855216ba8edd2', '221a1bcfe02af577f19d504d826e8f74', 'f115d8d29ee603116a1f572be3ff2cab', '0e2e7365c129eb21d540f95a90b728c4'],
            ['674db2415a9c8075a2c8ac7bfb1fc516', '0e2e7365c129eb21d540f95a90b728c4', '58a59e1c6ae75759a28138b8de594e5d', '60e9545bf4ae9787b2427dfb02666f0e'],
            ['07a4e61aae3217f2108ad180f979aa18', '60e9545bf4ae9787b2427dfb02666f0e', '32942a0b98786eb167e7753a26648a90', 'c9b7b7a9f9b62bcd49d8b06da166baa9'],
            ['ce1351b357843c3f595261ed581f10b1', 'c9b7b7a9f9b62bcd49d8b06da166baa9', 'b32f62459f713854573a3cd9c0a0dcaf', 'e271c1133fe1047cd4f7c54641714ed4'],
            ['2c6290a0686538438da5a4ab196e5e65', 'e271c1133fe1047cd4f7c54641714ed4', '78359ea3d1365058724a776a87390231', '63f6f9a365b34cf47c310eb7fbcceefa'],
            ['4f9469030dd674b7f194aa1ce2a2b09f', '63f6f9a365b34cf47c310eb7fbcceefa', '4ac78c0d0d60db44cf901dc26715f543', 'bf15e57cc506def134740bce645b3a30'],
            ['f0818c7fc8d0aa46c5e0a1d286f98aaf', 'bf15e57cc506def134740bce645b3a30', '8fd42028bad8e2c659cc1a1c0d376bb4', '26cc0370f912a4a0c19930bd17681a70'],
            ['d64d8f0f31c20ee60479916f919190df', '26cc0370f912a4a0c19930bd17681a70', '08e6761771ae6c8a3d855ac01e323ad1', 'd2e5c9115eff36793303892d834da5e1'],
            ['04a8461e6f3d389f377a184212dc353e', 'd2e5c9115eff36793303892d834da5e1', 'dcb74957c6928abda1a8a2ef262ef354', '18db9bcac8310de9347db4be3ebc4e89'],
            ['1c73ddd4a70c35760307acfc2c607bb7', '18db9bcac8310de9347db4be3ebc4e89', 'ffc026d68295397c3fea668edf68c334', '8a996ad520a6dac7b16875369403b70a'],
            ['96eab70187aaefb1b26fd9cab863ccbd', '8a996ad520a6dac7b16875369403b70a', 'd4302d849cc0f8c39f5c55418283075c', '46902ae54df47f17d544866bbf22a3f5'],
            ['d07a9de4ca5e90a6672b5fa107416f48', '46902ae54df47f17d544866bbf22a3f5', '0facd70d14af12136b391dd281865bfe', 'b9b6fee1c06fbce79836a19e1936de1a'],
            ['69cc63050a312c41ff1dfe3f1e77b152', 'b9b6fee1c06fbce79836a19e1936de1a', '3e764ef9cc8ec16c44c37abff52d0b52', '6e04d780568b50f5f9800b680285a474'],
            ['07c8b4855cba7cb4069df5571cf21526', '6e04d780568b50f5f9800b680285a474', '8f6e452e1329431f3ecc48c34d11289a', '5ceac8c71e75491cc8c3def754c6198e'],
            ['5b227c4242cf35a8ce5e2ba048340ca8', '5ceac8c71e75491cc8c3def754c6198e', 'c15ff78c5d22e091205741e65dcc5573', 'eab3f9331445af35833008308d12a238'],
            ['b1918571568a9a9d4d6e2390c526ae90', 'eab3f9331445af35833008308d12a238', '28a7a3eca641920bfbdea4a7633df6f0', 'c8891d75452076df873f6b262fb42fd5'],
            ['7918980413aaec42ca5148b6ea928145', 'c8891d75452076df873f6b262fb42fd5', 'ff3e9791356c8fda0fc419be20410d2e', '45d14b12be2110013c2764b4ada911a4'],
            ['3cc9d316ad8bfc43f6762c02473b90e1', '45d14b12be2110013c2764b4ada911a4', 'c72c506e183cb3bb95b7dad89fbf3f7c', 'c41189041c0fd5bfb6221f2f44c29b1d'],
            ['f8d85a12b18429fc4054332d03f90bfc', 'c41189041c0fd5bfb6221f2f44c29b1d', '79c471caaada66f44a8994318f970a8f', '369fb0951571c4a0c8dfc0e9c6bca6eb'],
            ['ce47ea87a4f5ed5c888bf3c4c545ad17', '369fb0951571c4a0c8dfc0e9c6bca6eb', 'b7efca9c98525010e140b207e06d28b0', '50ecd054e8d788568f49534e0d402a43'],
            ['9eab3ad34c22650a07c2a08ac8058754', '50ecd054e8d788568f49534e0d402a43', '0260b0ee91163808e88398269364b34a', '2403c9400de97b62a6ce8cd4013cd4fe'],
            ['baa8f39341cb1e68a10c2c5ec93953aa', '2403c9400de97b62a6ce8cd4013cd4fe', 'd0c7bbaba945b4e903a969389ef56b83', '69e6a63d4a9ca50f52f4da748105b157'],
            ['d34e55ae0b57bb67f3f8f62a483ce2fd', '69e6a63d4a9ca50f52f4da748105b157', '76771005bf9313b9aa9d41cd87de3c7c', '57a308d3366550dd0e5c7974de918028'],
            ['84ed5d7d3d32ebbafda48f5e96ad62d5', '57a308d3366550dd0e5c7974de918028', 'a6cd6b0df62c2df3898ea8c8b5ce7b78', '6d87465d2628cc82a1703862818bc8ba'],
            ['e96a1b201b1a27385cd4b73c1726aa6f', '6d87465d2628cc82a1703862818bc8ba', 'a843372570b52dde37bf4cfa03de38ef', '5f67b80d89fdca889967cdcb33f5a5fe'],
            ['b60da32d92e7edb0c5b37af724d30f91', '5f67b80d89fdca889967cdcb33f5a5fe', '31f2dced75e022cb20594f090a97a895', '97cffb0c7ddc2398688246954e9273df'],
            ['21c25821ef3bce28ad313c626a417c4e', '97cffb0c7ddc2398688246954e9273df', '75960ba1173100a9b11ce2a315362489', '064830bb6b5adc67d3c213a0eeb36a91'],
            ['278a689a8461124f7ef32fc284f216df', '064830bb6b5adc67d3c213a0eeb36a91', '37cbe9711ea3bbc5d68d0abc1a772acf', '809b1dd528339ff46b61b6db7b67693b'],
            ['a711754fac528dbb15929919ff957fe4', '809b1dd528339ff46b61b6db7b67693b', '682668133505d2a08482117dcdf769c6', 'a4e554d1373b0e6d8a4e47df8afc9a51'],
            ['03f4219e9b6983d69fdcdec67569e5b5', 'a4e554d1373b0e6d8a4e47df8afc9a51', 'babffa64982de3f31feddb1b5ca169ed', '47a5f9540481520441d24474965c7543'],
            ['4451d8ca9fe8d1d2de0e9ab2e33590f6', '47a5f9540481520441d24474965c7543', '80e14b3e7cae748674ca4d17b930de08', 'b5c83e5d4cf1ed2bccef3ad30a29d5f8'],
            ['f199e697d3193cf912e1a061e91c450e', 'b5c83e5d4cf1ed2bccef3ad30a29d5f8', 'c2aad6aa5005c3a0e80961f462cba910', 'c1635533b0329474547a024f70891bab'],
            ['30fab3a4632ba88d469ba22e99955ea5', 'c1635533b0329474547a024f70891bab', 'd9ea698c67a3ffc5746517874df5d882', 'ddb9b4c976454c6d49f15aec8e1ab53e'],
            ['ed43076d156ee4e00f6af8c2178feb9b', 'ddb9b4c976454c6d49f15aec8e1ab53e', '6b10913e6c6bb4bae4febde53a4a282b', 'a67f13656c5adebcb6cc2b9238924de8'],
            ['4b3c140879343a5cb9a6d3502f1da673', 'a67f13656c5adebcb6cc2b9238924de8', '5c248c54e9f49b723f7ba6d8ac2e709f', 'c7fe4ea8077c4e0491f26b20a20691ab'],
            ['8cc25aa07e4874582854b8708d1b37d8', 'c7fe4ea8077c4e0491f26b20a20691ab', '398d059a29e5c84d2e68035b14a07bfc', 'b25cc64ec8d4b5c76382b363ef1d762a'],
            ['3e9e9ceeb69cc19f4bd60b13620641f2', 'b25cc64ec8d4b5c76382b363ef1d762a', 'e5310300299250a598080ee89673f647', 'c730504b6e4aa554ce7c846bb117169c'],
            ['f9aecca5d8d664cb85aa8f78d311576e', 'c730504b6e4aa554ce7c846bb117169c', '55d0286d2e0027f74fd79266063790b7', 'a01970b5c0f49391832a13ce45411aec'],
            ['59b7bc101822f75a06809cb696504d82', 'a01970b5c0f49391832a13ce45411aec', 'ebc196e701d5c93344150e60d83a67fb', 'c8e0f8578346ae6965623c8aa96826c2'],
            ['915744479b64593363e2a03c3f386b40', 'c8e0f8578346ae6965623c8aa96826c2', '843b6d16257ddb456b3fba064586a84c', 'b6936c5c843d7be407032fb0d97d4397'],
            ['27c4281b1f5922d764e18f8ce64528d7', 'b6936c5c843d7be407032fb0d97d4397', '9f1743b5c856b9bf235938e12b7c4e79', '1eba6e566b602b981aa4439cbf0fa1cb'],
            ['397e464d7439094f7e45cc10594a891c', '1eba6e566b602b981aa4439cbf0fa1cb', '81ebd03144779ace930f98f5c6a3f9c5', 'e8f7af61ddfe113c93350f74606896f5'],
            ['d189e92ca9c71873ed70c36439221fe9', 'e8f7af61ddfe113c93350f74606896f5', 'c4037531f267d32a92abdd8c223c6c83', '09fc8e9d1b336d337c4047252bc5cec0'],
            ['d87567b1b2f475409130844112e7d129', '09fc8e9d1b336d337c4047252bc5cec0', 'b65efb7459a14f3bf20b153d9a76fb50', '0fc031bfb4c1a41dd20c7110b9150e05'],
            ['d7b5560e0635d15d433cf551abf2df2c', '0fc031bfb4c1a41dd20c7110b9150e05', 'e003a01149495a7e932b89b30f7a70da', '6c779d870118869d80f03fe87cefe4ac'],
            ['bbc2cb89072d57c0c3cccab9d71d3b80', '6c779d870118869d80f03fe87cefe4ac', '2d494c2e0cbc5183fee5e83b280606c4', 'b39bfb0ae22e3946108e1b17f5dd3ade'],
            ['08593083e5036e86d342d1ae22c0015e', 'b39bfb0ae22e3946108e1b17f5dd3ade', '9443f25b836f1c8ffc67a413f5d43b4f', '52a11f72ba8d702e3a30561b99c27cd4'],
            ['5af82ff15f8e1ea8e97287b5bb027d8a', '52a11f72ba8d702e3a30561b99c27cd4', '6f3f628b0798fd7d716a1b11c98cdff4', '062bb722338b1b048cecc61b3865ab6f'],
            ['5cd398d36c0505ac659e41ae8367d6e5', '062bb722338b1b048cecc61b3865ab6f', 'b0952a333456da2fb46c0a426edb6333', '74eb2469cfa3d289d0de293d2d194817'],
            ['2838bcbaa3a6d725b5406893ae7e9ef2', '74eb2469cfa3d289d0de293d2d194817', '051a7b1fd280b7cd935e917d7d098bd7', 'bc605a9454c42db75e9ce816dc5aff6f'],
            ['9458e62ef762fa92ebdc80857224619d', 'bc605a9454c42db75e9ce816dc5aff6f', '825170f10b9f604821b87102510aaf0d', '82f3e474128bf72ecde425b77c6101d7'],
            ['16ab025ae5e90dbc2638a5320e45604a', '82f3e474128bf72ecde425b77c6101d7', '23e5155a9e2fd9e76059a445c1c54169', '169035a602db75b90e851ef4a8eae430'],
            ['003b37fce732780528bdbbc6a6af847a', '169035a602db75b90e851ef4a8eae430', 'f145350238b02f5dafc441724f6c6dd2', '2abab288328b46726d5df7b3301ecc94'],
            ['2a818574d5b93e7745e04c7596b148ee', '2abab288328b46726d5df7b3301ecc94', '29bbad960fdeddfacf0c4a632cf3d6c7', 'c355582f18e556cf3485c2181020b65d'],
            ['e9d4dd5bcd5c68b871658e6d8691feb3', 'c355582f18e556cf3485c2181020b65d', '27259f279b8ed19ff05dc039e767b1fe', '92ba1f88559b9062df75bed0a94145a0'],
            ['7b6ec2d398c7f8daae1030bd2fd0bb13', '92ba1f88559b9062df75bed0a94145a0', '9ca4042a257496e7a5673ed572fb9b4f', 'cfe18aa8159839fb753b1caab8e709d4'],
            ['b48f487b8d5fc121db2b2c179737b2c7', 'cfe18aa8159839fb753b1caab8e709d4', '73494a19e335cc1ed1f4399aed9da369', 'dea0afc661068377aee04fdc6f47d3c4'],
            ['6a2fe7bdec59425675cb63cbf8706103', 'dea0afc661068377aee04fdc6f47d3c4', '6494ed2d36e59458cad117134d468431', '23f80611093c72e9c0321eb84abe5f60'],
            ['49d7e1ace56530bfb5f97d73b2ce3e63', '23f80611093c72e9c0321eb84abe5f60', '30d247a38aca33dcba2a5d205eaac701', 'b9e83d7c4691389267da04bb14555d7f'],
            ['f03fdcd0a3f4082dd22379c8a69b631c', 'b9e83d7c4691389267da04bb14555d7f', 'dab75e7dd761a193721bee40266ec086', '4f45928640b10065f18deef4c885ee3c'],
            ['bf7a4e56e345084823ae973c6e1e8d20', '4f45928640b10065f18deef4c885ee3c', '18dbaae822116a1228de3c2c5326f12a', '6ab881da44ce7f77b278caa7455bf885'],
            ['d5c2cf8ca78b773f91d65d9b2b4575a5', '6ab881da44ce7f77b278caa7455bf885', '9faf91d5902ec7c40d5befbf6dc4f4d2', '98b3f39fe2b74735a40e70676747c069'],
            ['4d713c13453c300a35d82dfc4c02b5cc', '98b3f39fe2b74735a40e70676747c069', '7071928022ab24b9b92ea2fab7612d64', '173cf306a75cfc14119076c45a4fde1f'],
            ['5a4dcf15e260cc1e24485b38164d6bd3', '173cf306a75cfc14119076c45a4fde1f', '1366f7f8d07f9fc4bb49f73e7ef0e182', '91f99fe543aab6cbbc904dfab9f6e4c4'],
            ['cbb450f0a1ca7ad598d816c2afbb8f17', '91f99fe543aab6cbbc904dfab9f6e4c4', 'f34ffcb7643a13c41048aee59b714c92', '9ded9553a500678bf3088f8767dc044e'],
            ['5659c5a304ca1d5e6bd09945c8678b59', '9ded9553a500678bf3088f8767dc044e', 'fc6e188b870112db782a3b69e66e9bcd', '7cfc670f9312cb0966969ff36b052055'],
            ['2aa5a2ac97d8d6570d4606b6a362ab0c', '7cfc670f9312cb0966969ff36b052055', '8531dc04fd4d41186a2c160e3ad7565a', 'c2b5163cc43c2df2f957a7afd4c5daa6'],
            ['e810b49053e4fba5f411a11977a771aa', 'c2b5163cc43c2df2f957a7afd4c5daa6', '09dc64d1e21b7dbf4d0b172de9aa2261', 'e592a3d168d3043eff77e71ec67f1348'],
            ['0d8217413b37ff9b0b664607b1d862e2', 'e592a3d168d3043eff77e71ec67f1348', 'f12ab0ce1364ea056096430f288581b5', '00f6eb857b33ab6b5f162f4df765f9e8'],
            ['0d74fcc4400454f05470694a46bd9b0a', '00f6eb857b33ab6b5f162f4df765f9e8', '6596b2e7b1243126e9b318830210a5cd', 'e360d359f970eed8728b26b67926fd05'],
            ['ee142f9db974ba2826fb4ffc3f9b660f', 'e360d359f970eed8728b26b67926fd05', '68f0d4c006002bbc7686935d4b6f3dd1', 'c3afd8d1177100193fe76876ac9d1e33'],
            ['2dbbf74cae05ba31191c278a9306783c', 'c3afd8d1177100193fe76876ac9d1e33', '4aea56900cca62e12f167814ab8a32d0', 'a316d8586da6d9fe52623fb761c7e97e'],
            ['8ead2f14c3a363cf4b7e183df2c19142', 'a316d8586da6d9fe52623fb761c7e97e', '4216e313c039143a4006d2de5f388b2b', '07352422d223e2393c6d1b712e25e8df'],
            ['89980b36118081f67713034cdce4799d', '07352422d223e2393c6d1b712e25e8df', '8cbb31c9ff2ebc88e38597cc103d252b', 'a0da48b3ed3263415cff4acab9c01c80'],
            ['29424385fcb2e2b72bec49866524651d', 'a0da48b3ed3263415cff4acab9c01c80', 'bd55ff9e3ad97091073c870cc54d5b19', 'f281260ce2d25ed3530f2010c79f3cad'],
            ['dbc365891e60bc6478e36996a2bb59b0', 'f281260ce2d25ed3530f2010c79f3cad', '36b003ec326e4fd0aafc231de981f824', 'c83e4e3858abc5e67ad46e559d4ef274'],
            ['13fd2bb146cb7982023707c33ff5abc4', 'c83e4e3858abc5e67ad46e559d4ef274', 'b99077e7ac83af2b355f86e61781c1e4', '186fff6204d861c90c9f7a27ea8605bf'],
            ['0b92d4d34213184b0ea87de4d573ae7b', '186fff6204d861c90c9f7a27ea8605bf', '48c48725671142974cb671a24417434a', 'dda8011af9e6557fbf69391d50852520'],
            ['d63ad5c9bbf54d34b1c144f985f68b5b', 'dda8011af9e6557fbf69391d50852520', 'e514de49b0d5e1dc385bd0f8e0843dcd', '73ca2c4ae224b38104e40cb59ce2d5b8'],
            ['a5f0f98359d1feb5b525484c19145ee3', '73ca2c4ae224b38104e40cb59ce2d5b8', '605cb74360a8afceecad70a4b00f4bb6', 'b46dfd60daff86d8581e4cc9920c6956'],
            ['119d04e3832e786ded3b04858b1837b5', 'b46dfd60daff86d8581e4cc9920c6956', '372de5d828849d50d105933ced5741fd', '94b894821de93ecbbb496b343b0ad810'],
            ['852590619ec746a656726fb1b012efa5', '94b894821de93ecbbb496b343b0ad810', '6fd1a203f3769326486f359071b5ebdb', '5b783cca8e4091a7a63db0ef8edc7381']
        ];
    }

    /**
     * @dataProvider encryptProvider
     */
    function testEncrypt($key, $iv, $plaintext, $ciphertext)
    {
        $key = new Key(hex2bin($key));
        $ofb = new OFB;
        $ctx = $ofb->initEncryption($key, hex2bin($iv));
        $lastCiphertext = hex2bin($plaintext);

        // http://csrc.nist.gov/groups/STM/cavp/documents/aes/AESAVS.pdf 6.4.2 --- OK...

        $nextPlaintext = $ofb->encrypt($ctx, $lastCiphertext);
        $lastCiphertext = hex2bin($iv);

        for ($i = 1; $i < 1000; $i++) {
            $thisCiphertext = $ofb->encrypt($ctx, $lastCiphertext);
            $lastCiphertext = $nextPlaintext;
            $nextPlaintext = $thisCiphertext;
        }

        $this->assertSame(hex2bin($ciphertext), $nextPlaintext);
    }

    /**
     * @dataProvider decryptProvider
     */
    function testDecrypt($key, $iv, $ciphertext, $plaintext)
    {
        $key = new Key(hex2bin($key));
        $ofb = new OFB;
        $ctx = $ofb->initDecryption($key, hex2bin($iv));
        $lastPlaintext = hex2bin($ciphertext);

        $nextCiphertext = $ofb->decrypt($ctx, $lastPlaintext);
        $lastPlaintext = hex2bin($iv);

        for ($i = 1; $i < 1000; $i++) {
            $thisPlaintext = $ofb->decrypt($ctx, $lastPlaintext);
            $lastPlaintext = $nextCiphertext;
            $nextCiphertext = $thisPlaintext;
        }

        $this->assertSame(hex2bin($plaintext), $nextCiphertext);
    }
}
