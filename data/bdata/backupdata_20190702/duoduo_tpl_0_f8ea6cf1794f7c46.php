<?php exit;?>
DROP TABLE IF EXISTS `duoduo_tpl`;
CREATE TABLE `duoduo_tpl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `data` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*duoduo table info cup*/;
INSERT INTO `duoduo_tpl` (`id`,`title`,`data`) VALUES('1','pc_default','eJyNkk1ugzAQhe/iSllFlDZAk0ioh+iiGyQ04MEMGNvlp02IcveOSReV0kpIXtgzn5+e3/gitFVWHAV1oHDIHv0xcEaJLXdAklE5deo3APM5UFQxUIBpJ6B8dJqB5zjkmgPiJY4X0eL53faSO9n0EqLMpngXJwui8I1m5E7krwy2H3m/P4jrVjQEtqyRDbBEB9ork5F4ClztXjsrU+hHKjVuoBzTT8KvDck0eWKdEewdXKN2C1npYmbGK+bsCvt1ut7fXIMxSP9rqwk4ppEcw6W1LeEq8ShiXvJTm3vtv/j44B9ZGCrbdeYTH+gHgRm8oYeqSpJwCZzzvZVwHxVh8TOT4TaTnZ8RNHDK/QfIzdRxMRbXb/nVuQM=');
INSERT INTO `duoduo_tpl` (`id`,`title`,`data`) VALUES('2','wap_default','eJwljF2OwjAMhO+SfV2RNi1pugfYU1hChjhRpPwUSJAAwdlxxMtoPJ5vniIWX8SfaFssaEGmfu+27MWv6EnI/hCS50YCWSltESuBtOSwxQoy5BNLQk9XkBEf950Pjlm0N7rUcCUmoe0nmqAZY46sVlloi9Ire2dn/irFfln3xF5rA825YeSRI+Zzw/ydWEf86vvdy3aEppUZ+tTMiF7mqSfz0P2wMn4qsVwY/tHTP5+ulHooG/W9Ubw+esJQJw==');
INSERT INTO `duoduo_tpl` (`id`,`title`,`data`) VALUES('3','pc_linjun','eJwVzNsKg0AMBNB/ybOorQjSbxGWFNcQuzfaLt7w3519nJOZnOSiRHpRTi7yNDYl1ikIVVRAgxj1goJ6FvtDgY+9Fp1RsN/VgnFEeHP4ZFbzTw7QPXpYKhM9LGBoWwAvvJny14TsoU+6bjZhKmY=');
INSERT INTO `duoduo_tpl` (`id`,`title`,`data`) VALUES('4','wap_w_chaofan','eJwljMsOgjAQRX/F1K2xFXm6U+JfNCEjLWW0D0QaA8Z/d4ibm5Mzc++H2WACOzG2IwKF3jToDAkn+aTdYGHSkr+btofQgZccfUvhwOiX5BaWeW+wo/YN/CMCNndF5aVHpR3g3z8jeJJ1GOYRTT9tZBQCKhlTLYSMuVLlyhlxqRJF5yJJSeVFeqRM0vWpEBWttcGGkba21/pwzi7s+wPaOT56');
INSERT INTO `duoduo_tpl` (`id`,`title`,`data`) VALUES('5','pc_miaozhe','eJxtkFFugzAQRO/i/rYpkEBRzoJkLdg464BtCpZSoty9u2AJqeqXZ55Hs2s/BTqlH9J24ioy8Z6sGpJtwd0joFwCk6JkFsDoGVdN4MIeLDzk4EFJF0eCObHBG08yBubNJ9tTcGa7AYXOSBwNBXDkMgrA+nMy2FOgBzfgx51un8IH7bZNXjQGF/AtcC2lpmk/lR52gV1IsxfvjMWdtvafpgnBzbz+m1JZlvMb5ptOqK+Luuy4Rrf4h9jvrW37GTbrbZ8yay9zkk2s6+rcxOorUwkXR+J8yMshy0NWLF+/84V0Yg==');
