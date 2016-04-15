<?php

# CAVS 11.1
# Config info for aes_values
# AESVS VarTxt test data for CBC
# State : Encrypt and Decrypt
# Key Length : 192
# Generated on Fri Apr 22 15:11:35 2011

namespace AES\Test;

use AES\CBC;
use AES\Key;

class CBCVarTxt192 extends \PHPUnit_Framework_TestCase
{
    function caseProvider()
    {
        return [
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', '80000000000000000000000000000000', '6cd02513e8d4dc986b4afe087a60bd0c'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'c0000000000000000000000000000000', '2ce1f8b7e30627c1c4519eada44bc436'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'e0000000000000000000000000000000', '9946b5f87af446f5796c1fee63a2da24'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'f0000000000000000000000000000000', '2a560364ce529efc21788779568d5555'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'f8000000000000000000000000000000', '35c1471837af446153bce55d5ba72a0a'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fc000000000000000000000000000000', 'ce60bc52386234f158f84341e534cd9e'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fe000000000000000000000000000000', '8c7c27ff32bcf8dc2dc57c90c2903961'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ff000000000000000000000000000000', '32bb6a7ec84499e166f936003d55a5bb'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ff800000000000000000000000000000', 'a5c772e5c62631ef660ee1d5877f6d1b'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffc00000000000000000000000000000', '030d7e5b64f380a7e4ea5387b5cd7f49'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffe00000000000000000000000000000', '0dc9a2610037009b698f11bb7e86c83e'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fff00000000000000000000000000000', '0046612c766d1840c226364f1fa7ed72'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fff80000000000000000000000000000', '4880c7e08f27befe78590743c05e698b'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffc0000000000000000000000000000', '2520ce829a26577f0f4822c4ecc87401'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffe0000000000000000000000000000', '8765e8acc169758319cb46dc7bcf3dca'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffff0000000000000000000000000000', 'e98f4ba4f073df4baa116d011dc24a28'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffff8000000000000000000000000000', 'f378f68c5dbf59e211b3a659a7317d94'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffc000000000000000000000000000', '283d3b069d8eb9fb432d74b96ca762b4'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffe000000000000000000000000000', 'a7e1842e8a87861c221a500883245c51'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffff000000000000000000000000000', '77aa270471881be070fb52c7067ce732'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffff800000000000000000000000000', '01b0f476d484f43f1aeb6efa9361a8ac'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffc00000000000000000000000000', '1c3a94f1c052c55c2d8359aff2163b4f'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffe00000000000000000000000000', 'e8a067b604d5373d8b0f2e05a03b341b'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffff00000000000000000000000000', 'a7876ec87f5a09bfea42c77da30fd50e'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffff80000000000000000000000000', '0cf3e9d3a42be5b854ca65b13f35f48d'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffc0000000000000000000000000', '6c62f6bbcab7c3e821c9290f08892dda'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffe0000000000000000000000000', '7f5e05bd2068738196fee79ace7e3aec'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffff0000000000000000000000000', '440e0d733255cda92fb46e842fe58054'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffff8000000000000000000000000', 'aa5d5b1c4ea1b7a22e5583ac2e9ed8a7'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffc000000000000000000000000', '77e537e89e8491e8662aae3bc809421d'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffe000000000000000000000000', '997dd3e9f1598bfa73f75973f7e93b76'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffff000000000000000000000000', '1b38d4f7452afefcb7fc721244e4b72e'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffff800000000000000000000000', '0be2b18252e774dda30cdda02c6906e3'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffc00000000000000000000000', 'd2695e59c20361d82652d7d58b6f11b2'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffe00000000000000000000000', '902d88d13eae52089abd6143cfe394e9'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffff00000000000000000000000', 'd49bceb3b823fedd602c305345734bd2'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffff80000000000000000000000', '707b1dbb0ffa40ef7d95def421233fae'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffc0000000000000000000000', '7ca0c1d93356d9eb8aa952084d75f913'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffe0000000000000000000000', 'f2cbf9cb186e270dd7bdb0c28febc57d'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffff0000000000000000000000', 'c94337c37c4e790ab45780bd9c3674a0'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffff8000000000000000000000', '8e3558c135252fb9c9f367ed609467a1'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffc000000000000000000000', '1b72eeaee4899b443914e5b3a57fba92'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffe000000000000000000000', '011865f91bc56868d051e52c9efd59b7'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffff000000000000000000000', 'e4771318ad7a63dd680f6e583b7747ea'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffff800000000000000000000', '61e3d194088dc8d97e9e6db37457eac5'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffc00000000000000000000', '36ff1ec9ccfbc349e5d356d063693ad6'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffe00000000000000000000', '3cc9e9a9be8cc3f6fb2ea24088e9bb19'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffff00000000000000000000', '1ee5ab003dc8722e74905d9a8fe3d350'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffff80000000000000000000', '245339319584b0a412412869d6c2eada'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffc0000000000000000000', '7bd496918115d14ed5380852716c8814'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffe0000000000000000000', '273ab2f2b4a366a57d582a339313c8b1'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffff0000000000000000000', '113365a9ffbe3b0ca61e98507554168b'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffff8000000000000000000', 'afa99c997ac478a0dea4119c9e45f8b1'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffc000000000000000000', '9216309a7842430b83ffb98638011512'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffe000000000000000000', '62abc792288258492a7cb45145f4b759'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffff000000000000000000', '534923c169d504d7519c15d30e756c50'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffff800000000000000000', 'fa75e05bcdc7e00c273fa33f6ee441d2'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffc00000000000000000', '7d350fa6057080f1086a56b17ec240db'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffe00000000000000000', 'f34e4a6324ea4a5c39a661c8fe5ada8f'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffff00000000000000000', '0882a16f44088d42447a29ac090ec17e'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffff80000000000000000', '3a3c15bfc11a9537c130687004e136ee'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffc0000000000000000', '22c0a7678dc6d8cf5c8a6d5a9960767c'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffe0000000000000000', 'b46b09809d68b9a456432a79bdc2e38c'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffff0000000000000000', '93baaffb35fbe739c17c6ac22eecf18f'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffff8000000000000000', 'c8aa80a7850675bc007c46df06b49868'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffc000000000000000', '12c6f3877af421a918a84b775858021d'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffe000000000000000', '33f123282c5d633924f7d5ba3f3cab11'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffff000000000000000', 'a8f161002733e93ca4527d22c1a0c5bb'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffff800000000000000', 'b72f70ebf3e3fda23f508eec76b42c02'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffc00000000000000', '6a9d965e6274143f25afdcfc88ffd77c'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffe00000000000000', 'a0c74fd0b9361764ce91c5200b095357'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffff00000000000000', '091d1fdc2bd2c346cd5046a8c6209146'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffff80000000000000', 'e2a37580116cfb71856254496ab0aca8'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffc0000000000000', 'e0b3a00785917c7efc9adba322813571'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffe0000000000000', '733d41f4727b5ef0df4af4cf3cffa0cb'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffff0000000000000', 'a99ebb030260826f981ad3e64490aa4f'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffff8000000000000', '73f34c7d3eae5e80082c1647524308ee'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffc000000000000', '40ebd5ad082345b7a2097ccd3464da02'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffe000000000000', '7cc4ae9a424b2cec90c97153c2457ec5'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffff000000000000', '54d632d03aba0bd0f91877ebdd4d09cb'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffff800000000000', 'd3427be7e4d27cd54f5fe37b03cf0897'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffc00000000000', 'b2099795e88cc158fd75ea133d7e7fbe'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffe00000000000', 'a6cae46fb6fadfe7a2c302a34242817b'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffff00000000000', '026a7024d6a902e0b3ffccbaa910cc3f'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffff80000000000', '156f07767a85a4312321f63968338a01'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffc0000000000', '15eec9ebf42b9ca76897d2cd6c5a12e2'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffe0000000000', 'db0d3a6fdcc13f915e2b302ceeb70fd8'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffff0000000000', '71dbf37e87a2e34d15b20e8f10e48924'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffff8000000000', 'c745c451e96ff3c045e4367c833e3b54'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffc000000000', '340da09c2dd11c3b679d08ccd27dd595'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffe000000000', '8279f7c0c2a03ee660c6d392db025d18'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffff000000000', 'a4b2c7d8eba531ff47c5041a55fbd1ec'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffff800000000', '74569a2ca5a7bd5131ce8dc7cbfbf72f'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffffc00000000', '3713da0c0219b63454035613b5a403dd'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffffe00000000', '8827551ddcc9df23fa72a3de4e9f0b07'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffff00000000', '2e3febfd625bfcd0a2c06eb460da1732'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffff80000000', 'ee82e6ba488156f76496311da6941deb'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffffc0000000', '4770446f01d1f391256e85a1b30d89d3'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffffe0000000', 'af04b68f104f21ef2afb4767cf74143c'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffffff0000000', 'cf3579a9ba38c8e43653173e14f3a4c6'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffffff8000000', 'b3bba904f4953e09b54800af2f62e7d4'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffffffc000000', 'fc4249656e14b29eb9c44829b4c59a46'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffffffe000000', '9b31568febe81cfc2e65af1c86d1a308'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffffff000000', '9ca09c25f273a766db98a480ce8dfedc'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffffff800000', 'b909925786f34c3c92d971883c9fbedf'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffffffc00000', '82647f1332fe570a9d4d92b2ee771d3b'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffffffe00000', '3604a7e80832b3a99954bca6f5b9f501'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffffffff00000', '884607b128c5de3ab39a529a1ef51bef'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffffffff80000', '670cfa093d1dbdb2317041404102435e'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffffffffc0000', '7a867195f3ce8769cbd336502fbb5130'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffffffffe0000', '52efcf64c72b2f7ca5b3c836b1078c15'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffffffff0000', '4019250f6eefb2ac5ccbcae044e75c7e'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffffffff8000', '022c4f6f5a017d292785627667ddef24'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffffffffc000', 'e9c21078a2eb7e03250f71000fa9e3ed'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffffffffe000', 'a13eaeeb9cd391da4e2b09490b3e7fad'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffffffffff000', 'c958a171dca1d4ed53e1af1d380803a9'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffffffffff800', '21442e07a110667f2583eaeeee44dc8c'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffffffffffc00', '59bbb353cf1dd867a6e33737af655e99'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffffffffffe00', '43cd3b25375d0ce41087ff9fe2829639'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffffffffff00', '6b98b17e80d1118e3516bd768b285a84'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffffffffff80', 'ae47ed3676ca0c08deea02d95b81db58'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffffffffffc0', '34ec40dc20413795ed53628ea748720b'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffffffffffe0', '4dc68163f8e9835473253542c8a65d46'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffffffffffff0', '2aabb999f43693175af65c6c612c46fb'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffffffffffff8', 'e01f94499dac3547515c5b1d756f0f58'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffffffffffffc', '9d12435a46480ce00ea349f71799df9a'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'fffffffffffffffffffffffffffffffe', 'cef41d16d266bdfe46938ad7884cc0cf'],
            ['000000000000000000000000000000000000000000000000', '00000000000000000000000000000000', 'ffffffffffffffffffffffffffffffff', 'b13db4da1f718bc6904797c82bcf2d32']
        ];
    }

    /**
     * @dataProvider caseProvider
     */
    function testEncrypt($key, $iv, $plaintext, $ciphertext)
    {
        $key = new Key(hex2bin($key));
        $cbc = new CBC;
        $ctx = $cbc->initEncryption($key, hex2bin($iv));
        $result = $cbc->encrypt($ctx, hex2bin($plaintext));
        $this->assertSame(hex2bin($ciphertext), $result);
    }

    /**
     * @dataProvider caseProvider
     */
    function testDecrypt($key, $iv, $plaintext, $ciphertext)
    {
        $key = new Key(hex2bin($key));
        $cbc = new CBC;
        $ctx = $cbc->initDecryption($key, hex2bin($iv));
        $result = $cbc->decrypt($ctx, hex2bin($ciphertext));
        $this->assertSame(hex2bin($plaintext), $result);
    }
}
