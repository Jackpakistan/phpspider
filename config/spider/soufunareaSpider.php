<?php

$siteconfig = array(
		elements::TYPE => 'fulldata',
		elements::NAME => '搜房网',
		elements::DB => array(
				'mongodb' => array(
						elements::HOST => 'mongo.wcc.cc',
						elements::PORT => '27017',
						elements::TIMEOUT => 0,
						elements::DBNAME => 'soufun3'
				)
		),
		elements::CATEGORY => array(
				elements::CATEGORY_URL => 'http://img1.soufun.com/secondhouse/image/esfnew/scripts/citys.js?v=3.201412041',
				elements::CATEGORY_MATCH_PREG => '/"name": "(.*)", "spell": "(.*)", "url": "http:\/\/esf.(\w+)\.soufun\.com\/"/',
				elements::CATEGORY_MATCH_MATCH => array('name'=>1,'cid'=>3),
				elements::CATEGORY_GROUP_SIZE => 1,
				elements::CATEGORY_LIST_URL => 'http://esf.#job.fang.com/agenthome/',
				elements::CATEGORY_LIST_PAGES_URL => 'http://esf.#job.fang.com/agenthome/-i3#i/',
				elements::CATEGORY_LIST_PREG => '//span[@class="fy_text"]||/\/(\d+)/',
				elements::CATEGORY_LIST_MATCH => 1,
				elements::CATEGORY_PAGE_START => 1,
				elements::CATEGORY_LIST_GOODS_PREG => '//p[@class="housetitle"]/a/@href',
				elements::CATEGORY_LIST_GOODS_Match => 1,
                elements::CATEGORY_MATCHING => '',
                elements::CATEGORY_ITEM_PREG => array(
                    elements::CATEGORY_ITEM_MATCHING =>'xpath',
                    elements::CATEGORY_ITEM_NAME =>'//div[@class="qxName"]/a/text()||2',
                    elements::CATEGORY_ITEM_IMG =>'',
                    elements::CATEGORY_ITEM_URL =>'//div[@class="qxName"]/a/@href||2',
                    elements::CATEGORY_ITEM_OPRICE =>'//input[@id="strCity11"]/@value||1',
                    elements::CATEGORY_ITEM_DPRICE =>'',
                    elements::CATEGORY_ITEM_SALE =>'',
                )

		),
		// item config
		elements::ITEM_TITLE => '//div[@class="rzname floatl"]/text()||1',
		elements::ITEM_SOURCE_CATEGORY_ID => '//input[@id="talkAgentPhone"]/@value||1',
		elements::ITEM_SOURCE_CATEGORY_NAME=> '//ul[@class="cont02 mb10"]/li[1]/text()||1',
		elements::ITEM_SKUID => '//input[@id="talkPageValue"]/@value||1',
		elements::ITEM_NAME =>'',
		elements::ITEM_SOURCE_BRAND_ID =>'//ul[@class="cont02 mb10"]/li[3]/a/text()||1',
		elements::ITEM_SOURCE_BRAND_NAME =>'//input[@id="talkComerce"]/@value||1',
		elements::ITEM_SOURCE_SELLER_ID =>'//input[@id="talkPageValue"]/@value||1',
		elements::ITEM_SOURCE_SELLER_NAME => '//input[@id="talkAgentName"]/@value||1',
		elements::ITEM_IMAGE_URL => '/jqimg="(.*?)"\/>/||1',
		elements::ITEM_PROMOTION => '//ul[@class="cont02 mb10"]/li[5]/text()||1',
		elements::ITEM_SALES => '//ul[@class="cont02 mb10"]/li[2]/a/text()||1',
		elements::ITEM_DPRICE => '//ul[@class="cont03"]/li[2]/text()||1',
		elements::ITEM_OPRICE => '//ul[@class="cont03"]/li[3]/text()||1',
		elements::ITEM_PRICE_URL => '//ul[@class="cont03"]/li[5]/text()||1',
		elements::ITEM_STATUS => '',
		elements::ITEM_DESCRIPTION =>'//ul[@class="cont03"]/li[7]/text()||1',
		elements::ITEM_CHARACTERS =>'/class="detail-list"(.*?)<\/ul>/si||1',
		elements::ITEM_ISBN => '//ul[@class="cont03"]/li[8]/text()||1',
		elements::ITEM_BARCODE => '//input[@id="talkAgentID"]/@value||1',
		elements::BASE_URL => 'http://sh.soufun.com/',
		elements::STID => 112,
        elements::HTML_ZIP =>'gzip',
		elements::DATASOURCE => '1',
		elements::COLLECTION_ITEM_NAME => 'Soufun_Area_Items',
		elements::COLLECTION_CATEGORY_NAME => 'soufun_area',
        elements::ITEMPAGECHARSET => 'gbk',
        elements::CHARSET => '',
		elements::MANAGER => 'living',
		elements::UPDATEDATA=>array(
				elements::ITEM_DPRICE,
				elements::ITEM_OPRICE,
		),
);
