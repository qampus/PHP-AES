<?php

# CAVS 11.1
# Config info for aes_values
# AESVS MCT test data for ECB
# State : Encrypt and Decrypt
# Key Length : 256
# Generated on Fri Apr 22 15:11:31 2011

namespace AES\Test;

use AES\ECB;
use AES\Key;

class ECBMCT256 extends \PHPUnit_Framework_TestCase
{
    function encryptProvider()
    {
        return [
            ['f9e8389f5b80712e3886cc1fa2d28a3b8c9cd88a2d4a54c6aa86ce0fef944be0', 'b379777f9050e2a818f2940cbbd9aba4', '6893ebaf0a1fccc704326529fdfb60db'],
            ['db9ea5a2284fa17fb63e13bf891c8e42e40f332527559801aeb4ab26126f2b3b', '6893ebaf0a1fccc704326529fdfb60db', 'f3c78a5e85e5439bf26d5818718157d6'],
            ['7099ed88e82744228a5303ae2ef6c0d017c8b97ba2b0db9a5cd9f33e63ee7ced', 'f3c78a5e85e5439bf26d5818718157d6', '2326b958b00b3050697eedb08cc20504'],
            ['5e9e65ea96e78dd4fb78ea1184f6ebde34ee002312bbebca35a71e8eef2c79e9', '2326b958b00b3050697eedb08cc20504', 'ec4332d5e3cebd3e0f5fc51452f4560d'],
            ['33acf1cafc822646dc869e905bd26f9ad8ad32f6f17556f43af8db9abdd82fe4', 'ec4332d5e3cebd3e0f5fc51452f4560d', '5da58b5ef2076340d555f861c3449a77'],
            ['eb0ae85c1b44d5db4729d268f49be2a08508b9a8037235b4efad23fb7e9cb593', '5da58b5ef2076340d555f861c3449a77', '307d50c18a0b6a08402ff131d72cb7ec'],
            ['fac93b561a9b6a0e809d71ecdb980afab575e96989795fbcaf82d2caa9b0027f', '307d50c18a0b6a08402ff131d72cb7ec', '92c34165a2963e77e05e2d6fc2d931d5'],
            ['a0559e41d58af36174a67246df87541b27b6a80c2bef61cb4fdcffa56b6933aa', '92c34165a2963e77e05e2d6fc2d931d5', 'cb33d519a1fdb1d5fbb185c47870c1ed'],
            ['e48824d6c2251d3a27f38fb543c31fc1ec857d158a12d01eb46d7a611319f247', 'cb33d519a1fdb1d5fbb185c47870c1ed', '78fb452f384c8f870e572890588f3728'],
            ['7a33440ad7c69d583355c745e5c88c47947e383ab25e5f99ba3a52f14b96c56f', '78fb452f384c8f870e572890588f3728', '12375e02a8bbc84b00feaab54a66db43'],
            ['0e6877c7fdc234efb9afcd96b4ebdb83864966381ae597d2bac4f84401f01e2c', '12375e02a8bbc84b00feaab54a66db43', 'eab1606610b55c857f2b4bf1cf3feba0'],
            ['ec91d3550c79ab4914a26987725ab1396cf8065e0a50cb57c5efb3b5cecff58c', 'eab1606610b55c857f2b4bf1cf3feba0', '6c73381147de97961cc26ad26602a45a'],
            ['83caed5a49579b3a55a71e5ece5966e5008b3e4f4d8e5cc1d92dd967a8cd51d6', '6c73381147de97961cc26ad26602a45a', 'e76c08fd29bf015352003c636fee5ff9'],
            ['91b9b50908968361dcd8f4ba236fa199e7e736b264315d928b2de504c7230e2f', 'e76c08fd29bf015352003c636fee5ff9', '6f26b8191a2b059dcdeb3dbabc437c29'],
            ['94fc46213c870f7965b88773afe93b1388c18eab7e1a580f46c6d8be7b607206', '6f26b8191a2b059dcdeb3dbabc437c29', 'e91e2fcef14dd4251caec97c45223fef'],
            ['b0deff009aff61f65763b0b9fdd39a9061dfa1658f578c2a5a6811c23e424de9', 'e91e2fcef14dd4251caec97c45223fef', '98fb2122912360f07916e4802c0ea1e5'],
            ['968f3c88d27f1be8decb00c4d464d369f92480471e74ecda237ef542124cec0c', '98fb2122912360f07916e4802c0ea1e5', 'b4a15c59976b39da50da8ed393f27a62'],
            ['35fe06a60309581565a97232140668464d85dc1e891fd50073a47b9181be966e', 'b4a15c59976b39da50da8ed393f27a62', 'd8b57d7a72ef92409c51d40bb8c4cbc5'],
            ['4739043d7750bcf4a6f269a3d54083ca9530a164fbf04740eff5af9a397a5dab', 'd8b57d7a72ef92409c51d40bb8c4cbc5', '548cc893e80caf5a601c2381517f8c5b'],
            ['4b065b5195f2ddf6f5d0aed72ff7a1e3c1bc69f713fce81a8fe98c1b6805d1f0', '548cc893e80caf5a601c2381517f8c5b', '1c2238c560d678d40b48cc8034add0c4'],
            ['1a949129e14c5963d997c86a6352ea53dd9e5132732a90ce84a1409b5ca80134', '1c2238c560d678d40b48cc8034add0c4', '2771ff806e061df8ad4aa877717bf309'],
            ['91cd3e48f4b42c432bed9848583e6dc7faefaeb21d2c8d3629ebe8ec2dd3f23d', '2771ff806e061df8ad4aa877717bf309', '065593fa1fcdb481bb27f334505543f5'],
            ['42d6f7b585a0a0d356c59be3d07d4d41fcba3d4802e139b792cc1bd87d86b1c8', '065593fa1fcdb481bb27f334505543f5', 'd3f309c0039b15d14eb8b739a94b94fa'],
            ['72900f0ecbf90fa058805deb430815072f493488017a2c66dc74ace1d4cd2532', 'd3f309c0039b15d14eb8b739a94b94fa', '4e441a3fb277d6fbe0ed7c6e080d9a9f'],
            ['12ef8789b91a8e35fd0ac79457a906f0610d2eb7b30dfa9d3c99d08fdcc0bfad', '4e441a3fb277d6fbe0ed7c6e080d9a9f', 'cb9241bc964cbc9823531f68e3a03b7c'],
            ['2cbe5980ad54c5dbf2ee3db1e9875733aa9f6f0b254146051fcacfe73f6084d1', 'cb9241bc964cbc9823531f68e3a03b7c', '70b17c3e869aca6076617a2cf75e9f4a'],
            ['dc4da3812736a2a603bcc6390763c5c5da2e1335a3db8c6569abb5cbc83e1b9b', '70b17c3e869aca6076617a2cf75e9f4a', 'f4b8a6ed6d6d72aff59484314f210bb9'],
            ['2e4e21a6eb77bb39a1cb5cd20cc5fd3b2e96b5d8ceb6feca9c3f31fa871f1022', 'f4b8a6ed6d6d72aff59484314f210bb9', 'f56a4597beaeafc0c14ee73988bcbee8'],
            ['54d5c037e61fd09e5cf57fd34c5e0192dbfcf04f7018510a5d71d6c30fa3aeca', 'f56a4597beaeafc0c14ee73988bcbee8', '04333079d5352236e1c79213f3f38dbe'],
            ['3a5da203e03fa399caeb1fac63679b56dfcfc036a52d733cbcb644d0fc502374', '04333079d5352236e1c79213f3f38dbe', '22c97ecdf4af830f94b11951f41e4d29'],
            ['5c84147d6ab2051b56b0993a7cbfa306fd06befb5182f03328075d81084e6e5d', '22c97ecdf4af830f94b11951f41e4d29', 'def46a3b39c8048431d2491d97daa6ea'],
            ['7af77aa155a33f658283ebc3e9eb708923f2d4c0684af4b719d5149c9f94c8b7', 'def46a3b39c8048431d2491d97daa6ea', '4c6367ad8a2190366c3d730fe5eeb6ee'],
            ['edabba9dc9d87357bb91da6931c743e16f91b36de26b648175e867937a7a7e59', '4c6367ad8a2190366c3d730fe5eeb6ee', '90bd09b4eb0f7d8397c0026cefea8fb3'],
            ['ab7ef1b4a1e43771de88e158ad26a419ff2cbad909641902e22865ff9590f1ea', '90bd09b4eb0f7d8397c0026cefea8fb3', '25aefcfa6ec98fae81b93afad7761711'],
            ['6b0145c6cbeaae320be86c2909c8d643da82462367ad96ac63915f0542e6e6fb', '25aefcfa6ec98fae81b93afad7761711', '607b26f4eb3585e3e886e75c0f3a01cf'],
            ['b46d28c20a614b6d986e92795258631cbaf960d78c98134f8b17b8594ddce734', '607b26f4eb3585e3e886e75c0f3a01cf', 'fe35fe16a3290042c28c021ee9ede73f'],
            ['93c5c8403410764717e547e3d07b0ec344cc9ec12fb1130d499bba47a431000b', 'fe35fe16a3290042c28c021ee9ede73f', '0141871c357a00ad37ae65597830cac8'],
            ['cf85ea60e0c94e611fedba48e19e9693458d19dd1acb13a07e35df1edc01cac3', '0141871c357a00ad37ae65597830cac8', 'df8bc7782ae10eb2c1bdfdc8887e4907'],
            ['d40735932ea269aeb51fa3caf0c176d89a06dea5302a1d12bf8822d6547f83c4', 'df8bc7782ae10eb2c1bdfdc8887e4907', '1ac65c65b6cd8ab751f1d908ebd962ab'],
            ['9a7120341819fe54fc8a750d17ecf20f80c082c086e797a5ee79fbdebfa6e16f', '1ac65c65b6cd8ab751f1d908ebd962ab', '9f10b53fb6adf7189e277d04e351aa9d'],
            ['8c19642c172cdb804059f751b3f25cff1fd037ff304a60bd705e86da5cf74bf2', '9f10b53fb6adf7189e277d04e351aa9d', 'c94ecc943ddc8d1eeafadd173cf73fdc'],
            ['e1cc9575e51d6a8240e6f3cd8958e1a6d69efb6b0d96eda39aa45bcd6000742e', 'c94ecc943ddc8d1eeafadd173cf73fdc', '5dd513d74b72f9d46b06b4b96a94c3bd'],
            ['ce41ff2d70b2169fad6a5f9ead4471e88b4be8bc46e41477f1a2ef740a94b793', '5dd513d74b72f9d46b06b4b96a94c3bd', '1594a31cc22cdbaf2011a9a317538608'],
            ['7b467b87180772677903a043bc63c3ef9edf4ba084c8cfd8d1b346d71dc7319b', '1594a31cc22cdbaf2011a9a317538608', '4d5e8d6fa3e2ea343b5afb77124529aa'],
            ['ca068b3afc717d1f6e8dc7e4eca0f56fd381c6cf272a25eceae9bda00f821831', '4d5e8d6fa3e2ea343b5afb77124529aa', '1bbf651cf61c295c96e73a210483d7a1'],
            ['d04d80998a971ec52d5390fa7eaf78eac83ea3d3d1360cb07c0e87810b01cf90', '1bbf651cf61c295c96e73a210483d7a1', '84b42f75c3b62bbf21707ba66cca399f'],
            ['2cfb1c71e8cac872e6a6dc90b0195acf4c8a8ca61280270f5d7efc2767cbf60f', '84b42f75c3b62bbf21707ba66cca399f', 'a0c514e1e6a9c659f605eff4cf4951a0'],
            ['405bc450a19e6dae76847b8eac858c8bec4f9847f429e156ab7b13d3a882a7af', 'a0c514e1e6a9c659f605eff4cf4951a0', '1dcc38307c6b3c31e25f868b279b3711'],
            ['35755fe97d9aeb1e67c1f4ca5a40ce1ff183a0778842dd67492495588f1990be', '1dcc38307c6b3c31e25f868b279b3711', 'cdd744574664be7b221d7a2921b4f0b2'],
            ['7e9d8b4bbd2aad70d229247d5880a0cb3c54e420ce26631c6b39ef71aead600c', 'cdd744574664be7b221d7a2921b4f0b2', 'e602ef85184ad4a86ed339e9403f541c'],
            ['73be0bb5b74a8f6324f8a5f0acbf5faada560ba5d66cb7b405ead698ee923410', 'e602ef85184ad4a86ed339e9403f541c', '7c227f03e605ff14c42fb9f8e8786e84'],
            ['c82e22faeca51a38045f2a3a04a0e6e2a67474a6306948a0c1c56f6006ea5a94', '7c227f03e605ff14c42fb9f8e8786e84', '94c0466b27aa4d361b19c250329c14a0'],
            ['7c1dd42bdff414e3733b846cbb00c43432b432cd17c30596dadcad3034764e34', '94c0466b27aa4d361b19c250329c14a0', 'fd6b281c93c1fd8e9b83b69ecf722f3b'],
            ['aa7ec003efbca86fe5ad028d0571cf3acfdf1ad18402f818415f1baefb04610f', 'fd6b281c93c1fd8e9b83b69ecf722f3b', 'a75b28be92dc53de9d44714918e3c541'],
            ['14ba26bafb6c8410104d70ec23876db56884326f16deabc6dc1b6ae7e3e7a44e', 'a75b28be92dc53de9d44714918e3c541', '48693025ba68f3fa3515e7112b6e32aa'],
            ['33b40738b39ebe39118938c6461ebd7820ed024aacb6583ce90e8df6c88996e4', '48693025ba68f3fa3515e7112b6e32aa', '6bfa37cc5ed6e5d4ddf40b1301957f73'],
            ['0d16eab1b56e2a468bf1ba1035129d574b173586f260bde834fa86e5c91ce997', '6bfa37cc5ed6e5d4ddf40b1301957f73', 'ca18b89c3225877e02e21042af9836a8'],
            ['44b55514a5b4a5a4294f3cf8e75ff73c810f8d1ac0453a96361896a76684df3f', 'ca18b89c3225877e02e21042af9836a8', 'c3ebc08368be58f8f514cfbd5f98ed52'],
            ['265f1a7a53151bc51526fe476e8c63ad42e44d99a8fb626ec30c591a391c326d', 'c3ebc08368be58f8f514cfbd5f98ed52', '788552397ddf2d5841dbc0e73dd11150'],
            ['23fa4630937015585ac065e6a7bd93023a611fa0d5244f3682d799fd04cd233d', '788552397ddf2d5841dbc0e73dd11150', 'e9d728bc19b50809bc1245552091d0b2'],
            ['9dd3a2408e5694fced28964c7f442e6ed3b6371ccc91473f3ec5dca8245cf38f', 'e9d728bc19b50809bc1245552091d0b2', 'ce08d78b58179b7957eeab6f74ddb10f'],
            ['055d53ef574a63f77c0b3a88e7e7cdb01dbee0979486dc46692b77c750814280', 'ce08d78b58179b7957eeab6f74ddb10f', '33ce33e80fcc262e9e862f5ac50c14df'],
            ['c1a90cdef5d5daaf7b182d6b409940e62e70d37f9b4afa68f7ad589d958d565f', '33ce33e80fcc262e9e862f5ac50c14df', '5c4d21e6045f11f9f91a8cef130304e0'],
            ['6a257a4f65bdd7d882ff45ffbb9541e5723df2999f15eb910eb7d472868e52bf', '5c4d21e6045f11f9f91a8cef130304e0', '4f50679c2dbfa63b5e55d031afacd44b'],
            ['5843bf4d6afc64273d328e1baf7821b03d6d9505b2aa4daa50e20443292286f4', '4f50679c2dbfa63b5e55d031afacd44b', '29f64e79de48f3d3d5dff92aa0b1783b'],
            ['8915060a33758a300c053d365c304d4e149bdb7c6ce2be79853dfd698993fecf', '29f64e79de48f3d3d5dff92aa0b1783b', '8c5bf92515a92449846593a3bdbe521b'],
            ['be2b2a41b3491511c181508b66ec96f798c02259794b9a3001586eca342dacd4', '8c5bf92515a92449846593a3bdbe521b', '5511fef7a2238277aaa9e25f1d097c19'],
            ['4d6f38935317ffa0cb29bdfa8a43cd19cdd1dcaedb681847abf18c952924d0cd', '5511fef7a2238277aaa9e25f1d097c19', '2ecd75c6a5eace1c541e12db150a2143'],
            ['1549ea3d167152c85223b0a603d1fa61e31ca9687e82d65bffef9e4e3c2ef18e', '2ecd75c6a5eace1c541e12db150a2143', '6a4cfcb9e8dae9610df99509daac7be0'],
            ['ba593f6731f70edab83f5cdf02527436895055d196583f3af2160b47e6828a6e', '6a4cfcb9e8dae9610df99509daac7be0', '185772deff51807147ac5350249b3e1a'],
            ['7126a05712f987f1c9249bf9a7c17b4f9107270f6909bf4bb5ba5817c219b474', '185772deff51807147ac5350249b3e1a', 'bfb1ce7df706bc972e1b8306d44aa135'],
            ['3d0fa3983ebc8a3f64c4135d7cd3195e2eb6e9729e0f03dc9ba1db1116531541', 'bfb1ce7df706bc972e1b8306d44aa135', 'f21df1e99a781dba4a68ff3491848f99'],
            ['88c88ec4d63eb481cd8d6e8e8d2e2715dcab189b04771e66d1c9242587d79ad8', 'f21df1e99a781dba4a68ff3491848f99', 'e4e8c9e4963a44f5cf27767e4e42fa61'],
            ['989b9545625a4025f7725d63847213883843d17f924d5a931eee525bc99560b9', 'e4e8c9e4963a44f5cf27767e4e42fa61', '27475121d0e3367d0e0c2d9fb39cfe95'],
            ['f49b61f190f982aa866d5c8f2e5749781f04805e42ae6cee10e27fc47a099e2c', '27475121d0e3367d0e0c2d9fb39cfe95', 'c2990626cb34c5d7fafe0430650ed907'],
            ['101537d5f633ad8dc7e8cc058ce7fe20dd9d8678899aa939ea1c7bf41f07472b', 'c2990626cb34c5d7fafe0430650ed907', '1c5d0cca2845b66c371c1760f81e024a'],
            ['1f6acaa66674733d28dfec92c43c7e76c1c08ab2a1df1f55dd006c94e7194561', '1c5d0cca2845b66c371c1760f81e024a', '6f5a53addd93c9a136401a804a710419'],
            ['b55bdefe370646699012062df748b6aaae9ad91f7c4cd6f4eb407614ad684178', '6f5a53addd93c9a136401a804a710419', '8e0c070be7109ead0e8cc0aa0bf95e61'],
            ['de09c34a85d56a2748559c309f04eb722096de149b5c4859e5ccb6bea6911f19', '8e0c070be7109ead0e8cc0aa0bf95e61', 'db53b5306561db899a635a56c56e7239'],
            ['2650ecd133a5df3825072a4df2d95d15fbc56b24fe3d93d07fafece863ff6d20', 'db53b5306561db899a635a56c56e7239', '72e5ac05990d3f5508295f95f8973313'],
            ['a8599f0edd6446b4bb9371e380bf33488920c7216730ac857786b37d9b685e33', '72e5ac05990d3f5508295f95f8973313', '86a8332f16f997bc02af5271c64e7e0f'],
            ['672e7b0d497458e260084662c566394e0f88f40e71c93b397529e10c5d26203c', '86a8332f16f997bc02af5271c64e7e0f', '8e53858ce7ad0d25410f886eeeca1e0e'],
            ['73ea41a50cdd5a98644e6f8d974af21381db71829664361c34266962b3ec3e32', '8e53858ce7ad0d25410f886eeeca1e0e', 'c6a1d493d607d2cef6aef29ee878c434'],
            ['14969b3ff78ccdd66c53b8027a79563e477aa5114063e4d2c2889bfc5b94fa06', 'c6a1d493d607d2cef6aef29ee878c434', 'a4973e0cfaf8d6ac6758615fc81e06df'],
            ['d09e2741b9480c2166c9c1832654763de3ed9b1dba9b327ea5d0faa3938afcd9', 'a4973e0cfaf8d6ac6758615fc81e06df', '67e3243d8bc81887517708a29a5d9ae5'],
            ['22c65ead303a0395cc9c065ada930ddd840ebf2031532af9f4a7f20109d7663c', '67e3243d8bc81887517708a29a5d9ae5', 'de2f35df51644cf5d79984be6c17c14c'],
            ['8679ef0357516245ec489386419646bc5a218aff6037660c233e76bf65c0a770', 'de2f35df51644cf5d79984be6c17c14c', '9eaedabb3bd046ec27a2bdafabdbc861'],
            ['6043902c115f107639e7c92ba4952301c48f50445be720e0049ccb10ce1b6f11', '9eaedabb3bd046ec27a2bdafabdbc861', '0cde7e6c1aecbbe996865bf30b178de7'],
            ['aca443a9e31033ea73b1eeda6e7d6ca1c8512e28410b9b09921a90e3c50ce2f6', '0cde7e6c1aecbbe996865bf30b178de7', 'ba25bf5be1e4c099b9e45eedd7369cb5'],
            ['60362e2b0bf998c875c087c370c4ca4772749173a0ef5b902bfece0e123a7e43', 'ba25bf5be1e4c099b9e45eedd7369cb5', '805be62789549ce6af74966467f41135'],
            ['6d7f0f7584162a1fa4dd6764548f355af22f775429bbc776848a586a75ce6f76', '805be62789549ce6af74966467f41135', 'ab6001c6c4c56e8ca393c5fd173505ba'],
            ['d8ecc39ac1d00c53216f6e64e826a7a9594f7692ed7ea9fa27199d9762fb6acc', 'ab6001c6c4c56e8ca393c5fd173505ba', '3ba3673f4f495dd1541d47c22b7921c5'],
            ['493108f91caedf714652149a2b2030fe62ec11ada237f42b7304da5549824b09', '3ba3673f4f495dd1541d47c22b7921c5', 'b24fe17cdc5c8cfa4260c38691b57bfa'],
            ['446af6dd5f58755aeaa0a1226d8c584fd0a3f0d17e6b78d1316419d3d83730f3', 'b24fe17cdc5c8cfa4260c38691b57bfa', '86d999a63b96f6c9d9aaf3be6202977b'],
            ['65f92d4e1723d5e58aeb350c79df28de567a697745fd8e18e8ceea6dba35a788', '86d999a63b96f6c9d9aaf3be6202977b', 'c4712aa733f9737f91e4ed61609e02f1'],
            ['915cee6af4ea95623f7122acda5e9040920b43d07604fd67792a070cdaaba579', 'c4712aa733f9737f91e4ed61609e02f1', '0e8c1a77b280f4c753682768fd6f3b23'],
            ['8e9bb2887fe60d42db4d827f00ba68ff9c8759a7c48409a02a42206427c49e5a', '0e8c1a77b280f4c753682768fd6f3b23', 'dccb684d47c480cc1317dcaa451234c0'],
            ['cbf85a6645469e5df882fe840776b6aa404c31ea8340896c3955fcce62d6aa9a', 'dccb684d47c480cc1317dcaa451234c0', '9a2c4f07489c14265e33ac031d02b3d8'],
            ['3ea3c33d7439ab3c478c01907f13cda7da607eedcbdc9d4a676650cd7fd41942', '9a2c4f07489c14265e33ac031d02b3d8', '5c8e622ddbd32ee79c17572e8b3ee61c'],
            ['312c5b43263c1af8d1e35c0f24d1004386ee1cc0100fb3adfb7107e3f4eaff5e', '5c8e622ddbd32ee79c17572e8b3ee61c', 'c5d2cb3d5b7ff0e23e308967ee074825']
        ];
    }

    function decryptProvider()
    {
        return [
            ['2b09ba39b834062b9e93f48373b8dd018dedf1e5ba1b8af831ebbacbc92a2643', '89649bd0115f30bd878567610223a59d', '1f9b9b213f1884fa98b62dd6639fd33b'],
            ['58ac71619fdc3ac73a17f285319e1cd492766ac485030e02a95d971daab5f578', '1f9b9b213f1884fa98b62dd6639fd33b', 'aecd334ef8fb0c51b6896ae065d8be28'],
            ['f6e3cca2cd628c10625c62cf08b385743cbb598a7df802531fd4fdfdcf6d4b50', 'aecd334ef8fb0c51b6896ae065d8be28', 'f1938dd245c055e9c380336ff8450d9d'],
            ['a9ae3bd7d454f19d69289875ff009d16cd28d458383857badc54ce92372846cd', 'f1938dd245c055e9c380336ff8450d9d', '42d5c4a13b748800ebfe0f67781dcff1'],
            ['e3bc6232865f0476149be7162ef8fc4b8ffd10f9034cdfba37aac1f54f35893c', '42d5c4a13b748800ebfe0f67781dcff1', '469968a00226f0aae7acfda02b2ce0ae'],
            ['451fbfba7f09b625540822fac8c8e30bc9647859016a2f10d0063c5564196992', '469968a00226f0aae7acfda02b2ce0ae', 'eab144d6f80ccfd2fae95d16784718ac'],
            ['f53e21e46a0ec97c980d49d6f4b81ec423d53c8ff966e0c22aef61431c5e713e', 'eab144d6f80ccfd2fae95d16784718ac', 'e04b91c3f084d733d3d0c1c7c152695a'],
            ['5fb3a2cbdbe6971fcd345961bdcba5f6c39ead4c09e237f1f93fa084dd0c1864', 'e04b91c3f084d733d3d0c1c7c152695a', 'e47db9b8c7fcc9459fa0a7fc84047b5b'],
            ['6b145436c5ae0dcb2477f94f5bdb037927e314f4ce1efeb4669f07785908633f', 'e47db9b8c7fcc9459fa0a7fc84047b5b', 'f617d26b55da999d65b2d236358b2e60'],
            ['126752da3d7f9a0ffc1a46ccaa8a3925d1f4c69f9bc46729032dd54e6c834d5f', 'f617d26b55da999d65b2d236358b2e60', '066ffea799ad5f09d03cb868deb1591e'],
            ['aa3daafbcd647f0a9eaa027146ab7aded79b383802693820d3116d26b2321441', '066ffea799ad5f09d03cb868deb1591e', '6d28dbb55fb10c1c3226609997a4fb38'],
            ['fed7b5c1f84d3dc185222da3fffac7a1bab3e38d5dd8343ce1370dbf2596ef79', '6d28dbb55fb10c1c3226609997a4fb38', '9dd78987562c9c099d67ccc927fcec13'],
            ['c36db4af0bee11dad6ea59679cfb988c27646a0a0bf4a8357c50c176026a036a', '9dd78987562c9c099d67ccc927fcec13', 'b5cc780ec75b8d8c5128c4d26fa520ea'],
            ['7b5aebe66f96867504ee9efd2bd56bda92a81204ccaf25b92d7805a46dcf2380', 'b5cc780ec75b8d8c5128c4d26fa520ea', 'c715bd2f23b98c66bf56e5680c6037f7'],
            ['81a73bfcacc994f47aeec0d655e0485055bdaf2bef16a9df922ee0cc61af1477', 'c715bd2f23b98c66bf56e5680c6037f7', 'e00984f9d93551e95ae85cfe4a829b82'],
            ['2678e4ccda2eb6ad7f0e2843020da2d8b5b42bd23623f836c8c6bc322b2d8ff5', 'e00984f9d93551e95ae85cfe4a829b82', 'bfa487fcb2331afe3ad82e59064b4aae'],
            ['03565af5c267a62e0d2500ead06bc7d90a10ac2e8410e2c8f21e926b2d66c55b', 'bfa487fcb2331afe3ad82e59064b4aae', '4c278ca418fd1c5718883da0ba4a066f'],
            ['ec719a4ed851c36f806fbc78183026cc4637208a9cedfe9fea96afcb972cc334', '4c278ca418fd1c5718883da0ba4a066f', 'ceed1c8b96d84951cadf809d3ea1b397'],
            ['f138ad912201beecd15ebe2049f980e588da3c010a35b7ce20492f56a98d70a3', 'ceed1c8b96d84951cadf809d3ea1b397', 'f88aed84bca42a06647d6504a5c48379'],
            ['8da22644e1267212742200dbf6b0ba947050d185b6919dc844344a520c49f3da', 'f88aed84bca42a06647d6504a5c48379', 'c451b75375d0fec1cc1825eefbcc1372'],
            ['5104213aabaccafe44129632f67cf2dab40166d6c3416309882c6fbcf785e0a8', 'c451b75375d0fec1cc1825eefbcc1372', '9a54dfd56bff41ea17bcf08d3761e95b'],
            ['4c7c62be3f5a9d09934940284565e9c92e55b903a8be22e39f909f31c0e409f3', '9a54dfd56bff41ea17bcf08d3761e95b', '76e074c587f112f3ffd17b390fa8cffc'],
            ['9871765871b1dae363fca3961224414a58b5cdc62f4f30106041e408cf4cc60f', '76e074c587f112f3ffd17b390fa8cffc', '5b14fd4c40a127733c20cd84648ec287'],
            ['58e044758e5e4f300eb08f8b6ccd967203a1308a6fee17635c61298cabc20488', '5b14fd4c40a127733c20cd84648ec287', '01c234e2392f42831b1172352f322286'],
            ['ffbb7104e110fdfe689f68ffa48b79590263046856c155e047705bb984f0260e', '01c234e2392f42831b1172352f322286', 'ab142165cb093648938660fd800d8896'],
            ['91aefec30a79b2524b19a611c0c4952da977250d9dc863a8d4f63b4404fdae98', 'ab142165cb093648938660fd800d8896', '5c28ad9b5721edadc30e09b4541fd724'],
            ['00d0f69c36671a9efeb7b8637e22af38f55f8896cae98e0517f832f050e279bc', '5c28ad9b5721edadc30e09b4541fd724', '5a9ad24fe456f4f766e839a8101373c3'],
            ['b22571c62ee4e0b4ebd7d776703c1345afc55ad92ebf7af271100b5840f10a7f', '5a9ad24fe456f4f766e839a8101373c3', 'a30e9a7730628b560c71967bdb35efce'],
            ['1431d01006510179dd13e2a83e1b8b7b0ccbc0ae1eddf1a47d619d239bc4e5b1', 'a30e9a7730628b560c71967bdb35efce', '7118cc8a057df7ea9b7fb096decf05d9'],
            ['06104531e2d000fff0cc8336b62e9bb87dd30c241ba0064ee61e2db5450be068', '7118cc8a057df7ea9b7fb096decf05d9', 'c550ff93a36fbb8e9a505682e07fb981'],
            ['8e5ebd5c9bf858f3379bfb88c7c75319b883f3b7b8cfbdc07c4e7b37a57459e9', 'c550ff93a36fbb8e9a505682e07fb981', '1375e7b4164adc861bbb77c50aba445c'],
            ['ccc9445c3aab1c03ec8027593d370664abf61403ae85614667f50cf2afce1db5', '1375e7b4164adc861bbb77c50aba445c', '5bc8b411c0fae92bad54b4e5c3a8826e'],
            ['b804994228d618a9b7a3e0c3d8d2d373f03ea0126e7f886dcaa1b8176c669fdb', '5bc8b411c0fae92bad54b4e5c3a8826e', '36c9de7c01298ff06c5e3ecf12507cd6'],
            ['8a784f32cdd7e2ed19e85faf04de2015c6f77e6e6f56079da6ff86d87e36e30d', '36c9de7c01298ff06c5e3ecf12507cd6', '35d814c0f6c07ae72bbe7cd1751d7527'],
            ['71e3cc0f60a2eafd83c3a455eefc4c9cf32f6aae99967d7a8d41fa090b2b962a', '35d814c0f6c07ae72bbe7cd1751d7527', '73c39ce5ea1b5eab18c9c15221e258d1'],
            ['71bef3d2beffa17d37c6c3b28ef2928280ecf64b738d23d195883b5b2ac9cefb', '73c39ce5ea1b5eab18c9c15221e258d1', 'ac67508a8bcab69f96ead29121718cd7'],
            ['9aa1ffa9e175f03a6bcc71fc2aea3a522c8ba6c1f847954e0362e9ca0bb8422c', 'ac67508a8bcab69f96ead29121718cd7', '49d2cac2ca39a3b66302e5f3650e71d7'],
            ['4e480b73ab5c659538354b2474c9367b65596c03327e36f860600c396eb633fb', '49d2cac2ca39a3b66302e5f3650e71d7', 'e54638674ea0b3e837772a2866723753'],
            ['aeecd55c38bef76367a21469d08721d2801f54647cde85105717261108c404a8', 'e54638674ea0b3e837772a2866723753', '074d933018e9e0558b416e39548994ff'],
            ['e36c6a30f734a679ab7af2f9ff767cfe8752c75464376545dc5648285c4d9057', '074d933018e9e0558b416e39548994ff', '04825a9ba20646acadb2cbdbd23530c0'],
            ['124806708fc5fc73a1e50c61e5a76b8783d09dcfc63123e971e483f38e78a097', '04825a9ba20646acadb2cbdbd23530c0', '25b98d2837580f9f3da8f2593f7b1d72'],
            ['560afb5529a8b433738348a296408cada66910e7f1692c764c4c71aab103bde5', '25b98d2837580f9f3da8f2593f7b1d72', '048b220c70d875cad6901e40f45c5b03'],
            ['8b7c61dd007d9d0d1937cfc69b63c114a2e232eb81b159bc9adc6fea455fe6e6', '048b220c70d875cad6901e40f45c5b03', '34e2a33412c0e682b29b26d5409d015f'],
            ['30560ca0a31d8145228d34fbf8415683960091df9371bf3e2847493f05c2e7b9', '34e2a33412c0e682b29b26d5409d015f', '942c057914f3b88fa0a40bb41d02b051'],
            ['20c7e6e45c08ba0756c379b6cd4d6886022c94a6878207b188e3428b18c057e8', '942c057914f3b88fa0a40bb41d02b051', '6f4e5c40e4135abfdf294b4d8c9304b3'],
            ['2a6c928bf8c2b32ce82ed0be1bc954b96d62c8e663915d0e57ca09c69453535b', '6f4e5c40e4135abfdf294b4d8c9304b3', 'cac032ddc2b27443d70d0f2dfb1a1d87'],
            ['74994d46526b2e9d5470a0a687f726f2a7a2fa3ba123294d80c706eb6f494edc', 'cac032ddc2b27443d70d0f2dfb1a1d87', '6aec33b2c1ae39237b13e86555722d1a'],
            ['5aaec28d079eef5f1c42df377c7e80accd4ec989608d106efbd4ee8e3a3b63c6', '6aec33b2c1ae39237b13e86555722d1a', '2df34173bbff331488b23687c755f617'],
            ['9bfa3c08b8f8b8758f0a1f4b0ef86be4e0bd88fadb72237a7366d809fd6e95d1', '2df34173bbff331488b23687c755f617', '07649dd5c1c7b38810cbecbad9c037ed'],
            ['188e3a027b75fede978c76e70a853f95e7d9152f1ab590f263ad34b324aea23c', '07649dd5c1c7b38810cbecbad9c037ed', 'ef3d9092321649d9bbb88f6448e3847b'],
            ['aae2c6363be3dbb71c21f3a2d9f123f108e485bd28a3d92bd815bbd76c4d2647', 'ef3d9092321649d9bbb88f6448e3847b', '1e5058b3e986d4aad80a11f909af1cca'],
            ['85a51c6d62ba97564ac955a5409c362916b4dd0ec1250d81001faa2e65e23a8d', '1e5058b3e986d4aad80a11f909af1cca', '9bf81052596b786b50b3f3506c009169'],
            ['0d09600f108a86cfd58f3c211a40c38d8d4ccd5c984e75ea50ac597e09e2abe4', '9bf81052596b786b50b3f3506c009169', '81bdaf86cf4255e5826294a51d2f9992'],
            ['14ab478866e1d160311aa8820df354fb0cf162da570c200fd2cecddb14cd3276', '81bdaf86cf4255e5826294a51d2f9992', '1fdc5fee9eb640ff547a98d9e1601b52'],
            ['39f18405f0b1da647f99479e87d4d153132d3d34c9ba60f086b45502f5ad2924', '1fdc5fee9eb640ff547a98d9e1601b52', '936609876cd6eebf31db5a6af7839844'],
            ['85a900bc1563b16e01481e45d1125734804b34b3a56c8e4fb76f0f68022eb160', '936609876cd6eebf31db5a6af7839844', '9ea8b6942287f470e9866a48f4dc661a'],
            ['c43d677fc0a1becbb0214221b866f0be1ee3822787eb7a3f5ee96520f6f2d77a', '9ea8b6942287f470e9866a48f4dc661a', '1dfc2cf82bfaa2732eb525916ef9ef13'],
            ['584f10659c2d3c41f6a1926de4595eb2031faedfac11d84c705c40b1980b3869', '1dfc2cf82bfaa2732eb525916ef9ef13', 'a5d8d1d60281a152b9b76142e3e5a512'],
            ['8eba336927e18b13eb3858a89709768ba6c77f09ae90791ec9eb21f37bee9d7b', 'a5d8d1d60281a152b9b76142e3e5a512', '8ac0278f2ab100a5964173d76934d732'],
            ['13f1558dcae09062bfdccdd0037e5c432c075886842179bb5faa522412da4a49', '8ac0278f2ab100a5964173d76934d732', '30233b70c4d6fd31b23cc77bc73559ea'],
            ['d736669842aa88f43f1de421d38f391f1c2463f640f7848aed96955fd5ef13a3', '30233b70c4d6fd31b23cc77bc73559ea', '766630dfd41e4146a827f55cba745b6a'],
            ['0ca8353df90e73606588a11675bd37a76a42532994e9c5cc45b160036f9b48c9', '766630dfd41e4146a827f55cba745b6a', '177f22d98f009c214a44b08cf40b790d'],
            ['136ec3a1a65ee7bb0fd09af7364b66607d3d71f01be959ed0ff5d08f9b9031c4', '177f22d98f009c214a44b08cf40b790d', 'e9c916a21dec9662bdd91a0f865f8b47'],
            ['ba5c2bd413daca7866de11c11db2926694f467520605cf8fb22cca801dcfba83', 'e9c916a21dec9662bdd91a0f865f8b47', '92b3ab3e28f6c606508706e0c3d76d28'],
            ['0fab4768fa7f104a3579f534508182920647cc6c2ef30989e2abcc60de18d7ab', '92b3ab3e28f6c606508706e0c3d76d28', '3652053dcba591f101944fb1a5eb2b99'],
            ['e766aa23c075deaa6fae68384f5b205e3015c951e5569878e33f83d17bf3fc32', '3652053dcba591f101944fb1a5eb2b99', '242260d2387c6f1a415834b34e300a7e'],
            ['9f1941442336bfffa1d6b27dce7845971437a983dd2af762a267b76235c3f64c', '242260d2387c6f1a415834b34e300a7e', 'a2a58ed050231b0d15f8cd99f5e171fb'],
            ['429a3cdc98124fafe33156a66b4e8c2ab69227538d09ec6fb79f7afbc02287b7', 'a2a58ed050231b0d15f8cd99f5e171fb', 'ec6631b17e5c97193fd9651b64feffe7'],
            ['92764a89e0de63823b9d9a5a001868035af416e2f3557b7688461fe0a4dc7850', 'ec6631b17e5c97193fd9651b64feffe7', '1eef8afa419a9341085a2d611185e42c'],
            ['0c0bf13d79d1297e137e6f5995cb0a2c441b9c18b2cfe837801c3281b5599c7c', '1eef8afa419a9341085a2d611185e42c', 'd4eb4e591cf856b816e2207264e426e4'],
            ['de31f995867bb45813d369349cb7434290f0d241ae37be8f96fe12f3d1bdba98', 'd4eb4e591cf856b816e2207264e426e4', '401e14b126348e1aedd13662a19c23fb'],
            ['3b1a02b5600444db09118e99765fa61dd0eec6f0880330957b2f249170219963', '401e14b126348e1aedd13662a19c23fb', '38bfea7e1eece741eb6a9601605129dd'],
            ['1fbcf4ffb36f76b88323f745b3152947e8512c8e96efd7d49045b2901070b0be', '38bfea7e1eece741eb6a9601605129dd', '71cd66b3b3553b6aa632c338a307e11a'],
            ['b963bfe1c513f0dba7e24b5cfa1535a3999c4a3d25baecbe367771a8b37751a4', '71cd66b3b3553b6aa632c338a307e11a', '34c2972d43e59eb0c44b7b69a540e7de'],
            ['23458e2a4332ce00e7967a438cd86448ad5edd10665f720ef23c0ac11637b67a', '34c2972d43e59eb0c44b7b69a540e7de', '8988b878d0c6a84b6262351e033fb1b7'],
            ['e552b8a0f474a8da502e749e3f0639b124d66568b699da45905e3fdf150807cd', '8988b878d0c6a84b6262351e033fb1b7', '010e24d01c37edca127484c8d8137772'],
            ['65a0645dd971bdb3b0d3a079ef96f3a925d841b8aaae378f822abb17cd1b70bf', '010e24d01c37edca127484c8d8137772', '6c7b2e83630a8c8b6219839297d7c647'],
            ['9867d55ae9f56a03c435f4b25f2eee2c49a36f3bc9a4bb04e03338855accb6f8', '6c7b2e83630a8c8b6219839297d7c647', 'ccba81435ecf162f70d30b3163cb3858'],
            ['e4a3addb683bbe85ed84b3ce044bcc538519ee78976bad2b90e033b439078ea0', 'ccba81435ecf162f70d30b3163cb3858', 'a0575bc9b8931f34cd6072e2015e7331'],
            ['6f543088bf24577d55a685e3637d85e8254eb5b12ff8b21f5d8041563859fd91', 'a0575bc9b8931f34cd6072e2015e7331', 'a44046a87574e6d3e6c6446fb3c324bc'],
            ['5fff671ca24c3b241ddb92761f02dfe3810ef3195a8c54ccbb4605398b9ad92d', 'a44046a87574e6d3e6c6446fb3c324bc', 'ef6abb8ae007b730be45aa85e39f362d'],
            ['db897d48a317f66412a8c52111c3f3b06e644893ba8be3fc0503afbc6805ef00', 'ef6abb8ae007b730be45aa85e39f362d', 'e5bd2edfb7e563f6cd86da757c4c370f'],
            ['78aec1da8e8e79007af12c05d800a18d8bd9664c0d6e800ac88575c91449d80f', 'e5bd2edfb7e563f6cd86da757c4c370f', '33caa267a64fb3cac210271bb8f25369'],
            ['2c3e5387a51addb0b7789ef0289109b3b813c42bab2133c00a9552d2acbb8b66', '33caa267a64fb3cac210271bb8f25369', '27bb26990ca5e12d387bd659cb7e7860'],
            ['85685fe6996d514e5928d7196f41b5d29fa8e2b2a784d2ed32ee848b67c5f306', '27bb26990ca5e12d387bd659cb7e7860', 'd866ace71916e00c1559bba4149380a0'],
            ['82abcc9a00bae55087cf5d87413f095547ce4e55be9232e127b73f2f735673a6', 'd866ace71916e00c1559bba4149380a0', '8a4d6a0af8488a82a0c31332db3e36de'],
            ['81d983ce59413e84d7af4558d2e3941ccd83245f46dab86387742c1da8684578', '8a4d6a0af8488a82a0c31332db3e36de', '05f6ff378b837cd375cddfae79ec2a9d'],
            ['bbe6d0d13a6b146bb23db6885ba66487c875db68cd59c4b0f2b9f3b3d1846fe5', '05f6ff378b837cd375cddfae79ec2a9d', 'b706bdb4019d604cc35faa07197c318d'],
            ['8092df6673b2b77783f2ba73c22e8d3c7f7366dcccc4a4fc31e659b4c8f85e68', 'b706bdb4019d604cc35faa07197c318d', 'b26354bc77d3ce16909ca505d2381e4c'],
            ['3118fc57b93677af8e14c1b5961b76f3cd103260bb176aeaa17afcb11ac04024', 'b26354bc77d3ce16909ca505d2381e4c', '1515ef6a25cf3943eadadc36a029194a'],
            ['c4bde4a0c5f80329be6dd515f5bf6dabd805dd0a9ed853a94ba02087bae9596e', '1515ef6a25cf3943eadadc36a029194a', '7b4ad946dfb59c80b1dc5cedb2fa87a0'],
            ['80b47f9126b0b1f5ab408bb9ea5f349aa34f044c416dcf29fa7c7c6a0813dece', '7b4ad946dfb59c80b1dc5cedb2fa87a0', 'fa10a53e14cde5ef1e9a8a5692847aa5'],
            ['86a43939c8cd243f7ff2a9658524373b595fa17255a02ac6e4e6f63c9a97a46b', 'fa10a53e14cde5ef1e9a8a5692847aa5', '4c9bed07308abcd0b09265b5efbe301c'],
            ['74a8f02a15285153e0ae160fbddcf6bf15c44c75652a96165474938975299477', '4c9bed07308abcd0b09265b5efbe301c', '75b7496c42809a3a592acbd8e069269e'],
            ['293b40a2f70cc2c4262554663fb6f0986073051927aa0c2c0d5e58519540b2e9', '75b7496c42809a3a592acbd8e069269e', '2dbc01185af7e084d90578468b6b10ef'],
            ['b04d4f4eb708eef86c5b6b8e08a665084dcf04017d5deca8d45b20171e2ba206', '2dbc01185af7e084d90578468b6b10ef', 'c95b3a9f689c9dce4995c24f72dd5162'],
            ['7cb9f7211815e0cb48b71286f84f80a184943e9e15c171669dcee2586cf6f364', 'c95b3a9f689c9dce4995c24f72dd5162', '616e55c3bf113e2c18cae3c61b7eb7d1'],
            ['b3cdb46cf92aa0b96e87212bc650d5e5e5fa6b5daad04f4a8504019e778844b5', '616e55c3bf113e2c18cae3c61b7eb7d1', '87e8b80767ebbdbad75cb94f4cb54f3b'],
            ['512c2a3821eb53af613141c71e1076656212d35acd3bf2f05258b8d13b3d0b8e', '87e8b80767ebbdbad75cb94f4cb54f3b', 'c83e20e18f2b1457788954b49fd84307'],
            ['9977c985745bc33954a2ce898bc8febdaa2cf3bb4210e6a72ad1ec65a4e54889', 'c83e20e18f2b1457788954b49fd84307', 'e3d3868f578caf34e36445bf14cefc68']
        ];
    }

    /**
     * @dataProvider encryptProvider
     */
    function testEncrypt($key, $plaintext, $ciphertext)
    {
        $key = new Key(hex2bin($key));
        $ecb = new ECB;
        $result = hex2bin($plaintext);
        for ($i = 0; $i < 1000; $i++) {
            $result = $ecb->encrypt($key, $result);

        }
        $this->assertSame(hex2bin($ciphertext), $result);
    }

    /**
     * @dataProvider decryptProvider
     */
    function testDecrypt($key, $ciphertext, $plaintext)
    {
        $key = new Key(hex2bin($key));
        $ecb = new ECB;
        $result = hex2bin($ciphertext);
        for ($i = 0; $i < 1000; $i++) {
            $result = $ecb->decrypt($key, $result);
        }
        $this->assertSame(hex2bin($plaintext), $result);
    }
}
