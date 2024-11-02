<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopProductSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop_product')->insert([
            [
                'image' => 'item01.jpg',
                'product_name' => '聖劍之心',
                'product_desc' => '傳奇級武器，提升角色戰鬥力。效果持久且強力，是線上遊戲中不可或缺的戰鬥利器。',
                'category' => '武器類',
                'price' => 2000,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item02.jpg',
                'product_name' => '黑暗之盾',
                'product_desc' => '提供強大的防禦能力，保護角色免受敵人的攻擊。耐用且有效的防禦道具。',
                'category' => '防具類',
                'price' => 2500,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item03.jpg',
                'product_name' => '神秘藥水',
                'product_desc' => '恢復角色的生命力和魔法力，提供快速而持久的恢復效果。',
                'category' => '道具類',
                'price' => 1000,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item04.jpg',
                'product_name' => '無限箭袋',
                'product_desc' => '擁有無限箭矢，不需要擔心箭矢耗盡。是弓箭手的必備道具。',
                'category' => '道具類',
                'price' => 3000,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item05.jpg',
                'product_name' => '龍之護符',
                'product_desc' => '賦予角色龍之力量，提升攻擊和防禦能力。是勇者們的信仰和力量之源。',
                'category' => '防具類',
                'price' => 4000,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item06.jpg',
                'product_name' => '魔法咒卷',
                'product_desc' => '學習強大的魔法咒語，可以讓角色施放各種強力的魔法技能。',
                'category' => '道具類',
                'price' => 3500,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item07.jpg',
                'product_name' => '魔法之石',
                'product_desc' => '強大的魔法道具，提升角色的魔法能力，使法術更加強大且持久。',
                'category' => '武器類',
                'price' => 1500,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item08.jpg',
                'product_name' => '炎之劍',
                'product_desc' => '強大的火系武器，能夠在戰鬥中發揮出強大的破壞力。',
                'category' => '武器類',
                'price' => 1000,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item09.jpg',
                'product_name' => '寒冰法杖',
                'product_desc' => '冰冷的法杖，能夠凍結敵人並造成持續傷害。',
                'category' => '法器類',
                'price' => 800,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item10.jpg',
                'product_name' => '神聖之盾',
                'product_desc' => '能夠保護使用者免受傷害的強大盾牌。',
                'category' => '防具類',
                'price' => 1300,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item11.jpg',
                'product_name' => '魔法藥水',
                'product_desc' => '恢復使用者一定量的魔法值。',
                'category' => '消耗品類',
                'price' => 700,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item12.jpg',
                'product_name' => '龍之鎧甲',
                'product_desc' => '由龍鱗製成的強力鎧甲，能夠提供良好的防護。',
                'category' => '防具類',
                'price' => 900,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item13.jpg',
                'product_name' => '閃電法杖',
                'product_desc' => '釋放出強大的閃電攻擊，對敵人造成巨大傷害。',
                'category' => '法器類',
                'price' => 1100,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item14.jpg',
                'product_name' => '治癒之手套',
                'product_desc' => '能夠恢復使用者生命值的神奇手套。',
                'category' => '防具類',
                'price' => 1200,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item15.jpg',
                'product_name' => '黑暗戒指',
                'product_desc' => '強大的黑暗能量纏繞的戒指，提升使用者的黑暗魔法能力。',
                'category' => '配飾類',
                'price' => 800,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item16.jpg',
                'product_name' => '召喚魔法書',
                'product_desc' => '包含強大召喚咒語的魔法書，能夠召喚出強大的生物幫助使用者作戰。',
                'category' => '法器類',
                'price' => 1000,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item17.jpg',
                'product_name' => '火焰戒指',
                'product_desc' => '擁有強大火焰力量的戒指，提升使用者的火系魔法能力。',
                'category' => '配飾類',
                'price' => 700,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item18.jpg',
                'product_name' => '暗影之杖',
                'product_desc' => '強力的黑暗法杖，擁有毀滅性的魔法能力，適合法師使用。',
                'category' => '法器類',
                'price' => 1200,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item19.jpg',
                'product_name' => '烈焰之甲',
                'product_desc' => '強化防禦力的重型盔甲，能夠吸收火焰攻擊並將其轉化為能量。',
                'category' => '防具類',
                'price' => 1300,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item20.jpg',
                'product_name' => '風暴之靴',
                'product_desc' => '提升角色速度的靈巧靴子，讓你在戰鬥中更靈活、更迅速。',
                'category' => '配飾類',
                'price' => 800,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item21.jpg',
                'product_name' => '霜寒法珠',
                'product_desc' => '冰霜法師的法杖，能夠施放強力的冰凍法術，讓敵人在冰雪中挣扎。',
                'category' => '法器類',
                'price' => 900,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item22.jpg',
                'product_name' => '雷神戰斧',
                'product_desc' => '強力的戰鬥斧頭，能夠召喚雷電打擊敵人，造成巨大傷害。',
                'category' => '武器類',
                'price' => 1200,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item23.jpg',
                'product_name' => '魔法之戒',
                'product_desc' => '強化角色魔法能力的戒指，提升法術威力和施放速度。',
                'category' => '配飾類',
                'price' => 800,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item24.jpg',
                'product_name' => '狂戰士之爪',
                'product_desc' => '強力的近戰武器，讓戰士在戰場上更具威脅性。',
                'category' => '配飾類',
                'price' => 1000,
                'onshelf_status' => '上架中'
            ],
            [
                'image' => 'item25.jpg',
                'product_name' => '黑暗面具',
                'product_desc' => '提升隱匿能力的面具，讓角色在暗夜中更難被發現。',
                'category' => '配飾類',
                'price' => 700,
                'onshelf_status' => '上架中'
            ],
        ]);

        DB::table('inventory_management')->insert([
            [
                'fk_product_id' => '1',
                'inventory_date' => '2024-05-14',
                'inventory_purchased' => '50',
            ],
        ]);
    }
}

