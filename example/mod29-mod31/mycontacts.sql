USE `proj`;
--
-- 資料表結構 `contact`
--
DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `tel` varchar(15) DEFAULT NULL
);

--
-- 資料表的匯出資料 `contact`
--

INSERT INTO `contact` (`id`, `name`, `tel`) VALUES
(1, '吳柏毅', '02-22617080'),
(2, '傅幫妲', '02-95701011'),
(3, '李敏傑', '03-4501488');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

