<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market;

use Lolzteam\Generated\Market\Models\SaveChangesResponse;
use Lolzteam\Generated\Market\Models\CategorySteamResponse;
use Lolzteam\Generated\Market\Models\CategoryFortniteResponse;
use Lolzteam\Generated\Market\Models\CategoryMihoyoResponse;
use Lolzteam\Generated\Market\Models\CategoryRiotResponse;
use Lolzteam\Generated\Market\Models\CategoryTelegramResponse;
use Lolzteam\Generated\Market\Models\CategorySupercellResponse;
use Lolzteam\Generated\Market\Models\CategoryEAResponse;
use Lolzteam\Generated\Market\Models\CategoryWotResponse;
use Lolzteam\Generated\Market\Models\CategoryWotBlitzResponse;
use Lolzteam\Generated\Market\Models\CategoryGiftsResponse;
use Lolzteam\Generated\Market\Models\CategoryEpicGamesResponse;
use Lolzteam\Generated\Market\Models\CategoryEscapeFromTarkovResponse;
use Lolzteam\Generated\Market\Models\CategorySocialClubResponse;
use Lolzteam\Generated\Market\Models\CategoryUplayResponse;
use Lolzteam\Generated\Market\Models\CategoryDiscordResponse;
use Lolzteam\Generated\Market\Models\CategoryTikTokResponse;
use Lolzteam\Generated\Market\Models\CategoryInstagramResponse;
use Lolzteam\Generated\Market\Models\CategoryBattleNetResponse;
use Lolzteam\Generated\Market\Models\CategoryChatGPTResponse;
use Lolzteam\Generated\Market\Models\CategoryVpnResponse;
use Lolzteam\Generated\Market\Models\CategoryRobloxResponse;
use Lolzteam\Generated\Market\Models\CategoryWarfaceResponse;
use Lolzteam\Generated\Market\Models\CategoryMinecraftResponse;
use Lolzteam\Generated\Market\Models\CategoryHytaleResponse;

/**
 * Category Search API group.
 */
class CategorySearchApi
{
    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {}

    /**
     * Get Last Accounts
     *
     * Displays a list of latest accounts.
     *
     * @endpoint GET /
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @return \Lolzteam\Generated\Market\Models\SaveChangesResponse
     */
    public function all(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
    ): \Lolzteam\Generated\Market\Models\SaveChangesResponse {
        $path = '/';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\SaveChangesResponse::fromArray($response);
    }

    /**
     * Steam
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /steam
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailType Email type.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param string|null $itemDomain Domain of native/autoreg email.
     * @param array|null $game List of games.
     * @param array|null $hoursPlayed List of minimum hours played by game.
     * @param array|null $hoursPlayedMax List of maximum hours played by game.
     * @param int|null $eg Guarantee type.
     * @param array|null $vac List of VAC bans by game.
     * @param bool|null $vacSkipGameCheck Don't check game existence while checking for vac.
     * @param string|null $rt Has community ban.
     * @param string|null $tradeBan Has lifetime trade ban.
     * @param string|null $tradeLimit Has temporary trade limit.
     * @param int|null $daybreak Number of days the account has been offline.
     * @param string|null $limit Has 5 $ limit.
     * @param string|null $mafile Has .mafile (Steam Guard Authenticator).
     * @param int|null $reg How old is the account.
     * @param string|null $regPeriod In what notation is time measured.
     * @param int|null $lmin Minimum level.
     * @param int|null $lmax Maximum level.
     * @param int|null $rmin Minimum rank in CS2 Matchmaking.
     * @param int|null $rmax Maximum rank in CS2 Matchmaking.
     * @param int|null $wingmanRmin Minimum rank in CS2 Wingman.
     * @param int|null $wingmanRmax Maximum rank in CS2 Wingman.
     * @param bool|null $noVac Has no VAC ban.
     * @param string|null $mmBan Has CS2 Matchmaking ban.
     * @param int|null $balanceMin Minimum balance.
     * @param int|null $balanceMax Maximum balance.
     * @param int|null $invGame Game ID to check inventory price.
     * @param float|null $invMin Minimum inventory price for game.
     * @param float|null $invMax Maximum inventory price for game.
     * @param int|null $friendsMin Minimum number of friends.
     * @param int|null $friendsMax Maximum number of friends.
     * @param int|null $gmin Minimum number of games.
     * @param int|null $gmax Maximum number of games.
     * @param int|null $winCountMin Minimum number of wins.
     * @param int|null $winCountMax Maximum number of wins.
     * @param array|null $medalId List of medal IDs.
     * @param bool|null $medalOperatorOr Search for medals using "OR" instead of "AND".
     * @param int|null $medalMin Minimum number of medals.
     * @param int|null $medalMax Maximum number of medals.
     * @param array|null $gift List of gifts.
     * @param int|null $giftMin Minimum number of gifts.
     * @param int|null $giftMax Maximum number of gifts.
     * @param int|null $recentlyHoursMin Minimum number of recently played hours.
     * @param int|null $recentlyHoursMax Maximum number of recently played hours.
     * @param array|null $country List of allowed countries.
     * @param array|null $notCountry List of disallowed countries.
     * @param int|null $cs2ProfileRankMin Minimum CS2 rank.
     * @param int|null $cs2ProfileRankMax Maximum CS2 rank.
     * @param int|null $solommrMin Minimum number of Dota 2 MMR.
     * @param int|null $solommrMax Maximum number of Dota 2 MMR.
     * @param int|null $d2GameCountMin Minimum number of Dota 2 games.
     * @param int|null $d2GameCountMax Maximum number of Dota 2 games.
     * @param int|null $d2WinCountMin Minimum number of Dota 2 wins.
     * @param int|null $d2WinCountMax Maximum number of Dota 2 wins.
     * @param int|null $d2BehaviorMin Minimum number of Dota 2 behavior.
     * @param int|null $d2BehaviorMax Maximum number of Dota 2 behavior.
     * @param int|null $faceitLvlMin Minimum FACEIT level.
     * @param int|null $faceitLvlMax Maximum FACEIT level.
     * @param int|null $pointsMin Minimum number of Steam points.
     * @param int|null $pointsMax Maximum number of Steam points.
     * @param int|null $relevantGmin Minimum number of relevant games.
     * @param int|null $relevantGmax Maximum number of relevant games.
     * @param int|null $lastTransDate How old is last transaction.
     * @param string|null $lastTransDatePeriod In what notation is time measured.
     * @param int|null $lastTransDateLater How new is last transaction.
     * @param string|null $lastTransDatePeriodLater In what notation is time measured.
     * @param bool|null $noTrans Has no transactions.
     * @param bool|null $trans Has transactions.
     * @param float|null $giftsPurchaseMin Minimum amount spent on gifts.
     * @param float|null $giftsPurchaseMax Maximum amount spent on gifts.
     * @param float|null $refundsPurchaseMin Minimum amount of refunds.
     * @param float|null $refundsPurchaseMax Minimum amount of refunds.
     * @param float|null $ingamePurchaseMin Minimum spend amount on in-game purchases.
     * @param float|null $ingamePurchaseMax Maximum spend amount on in-game purchases.
     * @param float|null $gamesPurchaseMin Minimum spend amount on all purchases.
     * @param float|null $gamesPurchaseMax Maximum spend amount on all purchases.
     * @param float|null $purchaseMin Minimum spend amount on all purchases.
     * @param float|null $purchaseMax Maximum spend amount on all purchases.
     * @param string|null $hasActivatedKeys Has activated keys.
     * @param int|null $eloMin Minimum Premier ELO in CS2.
     * @param int|null $eloMax Maximum Premier ELO in CS2.
     * @param int|null $cs2MapRank Map for rank in CS2.
     * @param int|null $cs2MapRmin Minimum rank in CS2 on a certain map.
     * @param int|null $cs2MapRmax Maximum rank in CS2 on a certain map.
     * @param string|null $hasFaceit Has FACEIT account.
     * @param int|null $faceitCsgoLvlMin Minimum FACEIT level.
     * @param int|null $faceitCsgoLvlMax Maximum FACEIT level.
     * @param int|null $rustDeathsMin Minimum number of Rust deaths
     * @param int|null $rustDeathsMax Maximum number of Rust deaths
     * @param int|null $rustKillsMin Minimum number of Rust kills
     * @param int|null $rustKillsMax Maximum number of Rust kills
     * @param int|null $d2LastMatchDate How old is last match of Dota 2.
     * @param string|null $d2LastMatchDatePeriod In what notation is time measured.
     * @param int|null $cardsMin Minimum number of available to collect trading cards.
     * @param int|null $cardsMax Maximum number of available to collect trading cards.
     * @param int|null $cardsGamesMin Minimum number of available games with available to collect trading cards.
     * @param int|null $cardsGamesMax Maximum number of available games with available to collect trading cards.
     * @param bool|null $skipVacInv Ignore inventory value if game has VAC ban.
     * @return \Lolzteam\Generated\Market\Models\CategorySteamResponse
     */
    public function steam(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailType = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        string|null $itemDomain = null,
        array|null $game = null,
        array|null $hoursPlayed = null,
        array|null $hoursPlayedMax = null,
        int|null $eg = null,
        array|null $vac = null,
        bool|null $vacSkipGameCheck = null,
        string|null $rt = null,
        string|null $tradeBan = null,
        string|null $tradeLimit = null,
        int|null $daybreak = null,
        string|null $limit = null,
        string|null $mafile = null,
        int|null $reg = null,
        string|null $regPeriod = null,
        int|null $lmin = null,
        int|null $lmax = null,
        int|null $rmin = null,
        int|null $rmax = null,
        int|null $wingmanRmin = null,
        int|null $wingmanRmax = null,
        bool|null $noVac = null,
        string|null $mmBan = null,
        int|null $balanceMin = null,
        int|null $balanceMax = null,
        int|null $invGame = null,
        float|null $invMin = null,
        float|null $invMax = null,
        int|null $friendsMin = null,
        int|null $friendsMax = null,
        int|null $gmin = null,
        int|null $gmax = null,
        int|null $winCountMin = null,
        int|null $winCountMax = null,
        array|null $medalId = null,
        bool|null $medalOperatorOr = null,
        int|null $medalMin = null,
        int|null $medalMax = null,
        array|null $gift = null,
        int|null $giftMin = null,
        int|null $giftMax = null,
        int|null $recentlyHoursMin = null,
        int|null $recentlyHoursMax = null,
        array|null $country = null,
        array|null $notCountry = null,
        int|null $cs2ProfileRankMin = null,
        int|null $cs2ProfileRankMax = null,
        int|null $solommrMin = null,
        int|null $solommrMax = null,
        int|null $d2GameCountMin = null,
        int|null $d2GameCountMax = null,
        int|null $d2WinCountMin = null,
        int|null $d2WinCountMax = null,
        int|null $d2BehaviorMin = null,
        int|null $d2BehaviorMax = null,
        int|null $faceitLvlMin = null,
        int|null $faceitLvlMax = null,
        int|null $pointsMin = null,
        int|null $pointsMax = null,
        int|null $relevantGmin = null,
        int|null $relevantGmax = null,
        int|null $lastTransDate = null,
        string|null $lastTransDatePeriod = null,
        int|null $lastTransDateLater = null,
        string|null $lastTransDatePeriodLater = null,
        bool|null $noTrans = null,
        bool|null $trans = null,
        float|null $giftsPurchaseMin = null,
        float|null $giftsPurchaseMax = null,
        float|null $refundsPurchaseMin = null,
        float|null $refundsPurchaseMax = null,
        float|null $ingamePurchaseMin = null,
        float|null $ingamePurchaseMax = null,
        float|null $gamesPurchaseMin = null,
        float|null $gamesPurchaseMax = null,
        float|null $purchaseMin = null,
        float|null $purchaseMax = null,
        string|null $hasActivatedKeys = null,
        int|null $eloMin = null,
        int|null $eloMax = null,
        int|null $cs2MapRank = null,
        int|null $cs2MapRmin = null,
        int|null $cs2MapRmax = null,
        string|null $hasFaceit = null,
        int|null $faceitCsgoLvlMin = null,
        int|null $faceitCsgoLvlMax = null,
        int|null $rustDeathsMin = null,
        int|null $rustDeathsMax = null,
        int|null $rustKillsMin = null,
        int|null $rustKillsMax = null,
        int|null $d2LastMatchDate = null,
        string|null $d2LastMatchDatePeriod = null,
        int|null $cardsMin = null,
        int|null $cardsMax = null,
        int|null $cardsGamesMin = null,
        int|null $cardsGamesMax = null,
        bool|null $skipVacInv = null,
    ): \Lolzteam\Generated\Market\Models\CategorySteamResponse {
        $path = '/steam';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailType !== null) {
            $params['email_type[]'] = $emailType;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($itemDomain !== null) {
            $params['item_domain'] = $itemDomain;
        }
        if ($game !== null) {
            $params['game[]'] = $game;
        }
        if ($hoursPlayed !== null) {
            foreach ($hoursPlayed as $k => $v) {
                $params['hours_played[' . $k . ']'] = $v;
            }
        }
        if ($hoursPlayedMax !== null) {
            foreach ($hoursPlayedMax as $k => $v) {
                $params['hours_played_max[' . $k . ']'] = $v;
            }
        }
        if ($eg !== null) {
            $params['eg'] = $eg;
        }
        if ($vac !== null) {
            $params['vac[]'] = $vac;
        }
        if ($vacSkipGameCheck !== null) {
            $params['vac_skip_game_check'] = $vacSkipGameCheck;
        }
        if ($rt !== null) {
            $params['rt'] = $rt;
        }
        if ($tradeBan !== null) {
            $params['trade_ban'] = $tradeBan;
        }
        if ($tradeLimit !== null) {
            $params['trade_limit'] = $tradeLimit;
        }
        if ($daybreak !== null) {
            $params['daybreak'] = $daybreak;
        }
        if ($limit !== null) {
            $params['limit'] = $limit;
        }
        if ($mafile !== null) {
            $params['mafile'] = $mafile;
        }
        if ($reg !== null) {
            $params['reg'] = $reg;
        }
        if ($regPeriod !== null) {
            $params['reg_period'] = $regPeriod;
        }
        if ($lmin !== null) {
            $params['lmin'] = $lmin;
        }
        if ($lmax !== null) {
            $params['lmax'] = $lmax;
        }
        if ($rmin !== null) {
            $params['rmin'] = $rmin;
        }
        if ($rmax !== null) {
            $params['rmax'] = $rmax;
        }
        if ($wingmanRmin !== null) {
            $params['wingman_rmin'] = $wingmanRmin;
        }
        if ($wingmanRmax !== null) {
            $params['wingman_rmax'] = $wingmanRmax;
        }
        if ($noVac !== null) {
            $params['no_vac'] = $noVac;
        }
        if ($mmBan !== null) {
            $params['mm_ban'] = $mmBan;
        }
        if ($balanceMin !== null) {
            $params['balance_min'] = $balanceMin;
        }
        if ($balanceMax !== null) {
            $params['balance_max'] = $balanceMax;
        }
        if ($invGame !== null) {
            $params['inv_game'] = $invGame;
        }
        if ($invMin !== null) {
            $params['inv_min'] = $invMin;
        }
        if ($invMax !== null) {
            $params['inv_max'] = $invMax;
        }
        if ($friendsMin !== null) {
            $params['friends_min'] = $friendsMin;
        }
        if ($friendsMax !== null) {
            $params['friends_max'] = $friendsMax;
        }
        if ($gmin !== null) {
            $params['gmin'] = $gmin;
        }
        if ($gmax !== null) {
            $params['gmax'] = $gmax;
        }
        if ($winCountMin !== null) {
            $params['win_count_min'] = $winCountMin;
        }
        if ($winCountMax !== null) {
            $params['win_count_max'] = $winCountMax;
        }
        if ($medalId !== null) {
            $params['medal_id[]'] = $medalId;
        }
        if ($medalOperatorOr !== null) {
            $params['medal_operator_or'] = $medalOperatorOr;
        }
        if ($medalMin !== null) {
            $params['medal_min'] = $medalMin;
        }
        if ($medalMax !== null) {
            $params['medal_max'] = $medalMax;
        }
        if ($gift !== null) {
            $params['gift[]'] = $gift;
        }
        if ($giftMin !== null) {
            $params['gift_min'] = $giftMin;
        }
        if ($giftMax !== null) {
            $params['gift_max'] = $giftMax;
        }
        if ($recentlyHoursMin !== null) {
            $params['recently_hours_min'] = $recentlyHoursMin;
        }
        if ($recentlyHoursMax !== null) {
            $params['recently_hours_max'] = $recentlyHoursMax;
        }
        if ($country !== null) {
            $params['country[]'] = $country;
        }
        if ($notCountry !== null) {
            $params['not_country[]'] = $notCountry;
        }
        if ($cs2ProfileRankMin !== null) {
            $params['cs2_profile_rank_min'] = $cs2ProfileRankMin;
        }
        if ($cs2ProfileRankMax !== null) {
            $params['cs2_profile_rank_max'] = $cs2ProfileRankMax;
        }
        if ($solommrMin !== null) {
            $params['solommr_min'] = $solommrMin;
        }
        if ($solommrMax !== null) {
            $params['solommr_max'] = $solommrMax;
        }
        if ($d2GameCountMin !== null) {
            $params['d2_game_count_min'] = $d2GameCountMin;
        }
        if ($d2GameCountMax !== null) {
            $params['d2_game_count_max'] = $d2GameCountMax;
        }
        if ($d2WinCountMin !== null) {
            $params['d2_win_count_min'] = $d2WinCountMin;
        }
        if ($d2WinCountMax !== null) {
            $params['d2_win_count_max'] = $d2WinCountMax;
        }
        if ($d2BehaviorMin !== null) {
            $params['d2_behavior_min'] = $d2BehaviorMin;
        }
        if ($d2BehaviorMax !== null) {
            $params['d2_behavior_max'] = $d2BehaviorMax;
        }
        if ($faceitLvlMin !== null) {
            $params['faceit_lvl_min'] = $faceitLvlMin;
        }
        if ($faceitLvlMax !== null) {
            $params['faceit_lvl_max'] = $faceitLvlMax;
        }
        if ($pointsMin !== null) {
            $params['points_min'] = $pointsMin;
        }
        if ($pointsMax !== null) {
            $params['points_max'] = $pointsMax;
        }
        if ($relevantGmin !== null) {
            $params['relevant_gmin'] = $relevantGmin;
        }
        if ($relevantGmax !== null) {
            $params['relevant_gmax'] = $relevantGmax;
        }
        if ($lastTransDate !== null) {
            $params['last_trans_date'] = $lastTransDate;
        }
        if ($lastTransDatePeriod !== null) {
            $params['last_trans_date_period'] = $lastTransDatePeriod;
        }
        if ($lastTransDateLater !== null) {
            $params['last_trans_date_later'] = $lastTransDateLater;
        }
        if ($lastTransDatePeriodLater !== null) {
            $params['last_trans_date_period_later'] = $lastTransDatePeriodLater;
        }
        if ($noTrans !== null) {
            $params['no_trans'] = $noTrans;
        }
        if ($trans !== null) {
            $params['trans'] = $trans;
        }
        if ($giftsPurchaseMin !== null) {
            $params['gifts_purchase_min'] = $giftsPurchaseMin;
        }
        if ($giftsPurchaseMax !== null) {
            $params['gifts_purchase_max'] = $giftsPurchaseMax;
        }
        if ($refundsPurchaseMin !== null) {
            $params['refunds_purchase_min'] = $refundsPurchaseMin;
        }
        if ($refundsPurchaseMax !== null) {
            $params['refunds_purchase_max'] = $refundsPurchaseMax;
        }
        if ($ingamePurchaseMin !== null) {
            $params['ingame_purchase_min'] = $ingamePurchaseMin;
        }
        if ($ingamePurchaseMax !== null) {
            $params['ingame_purchase_max'] = $ingamePurchaseMax;
        }
        if ($gamesPurchaseMin !== null) {
            $params['games_purchase_min'] = $gamesPurchaseMin;
        }
        if ($gamesPurchaseMax !== null) {
            $params['games_purchase_max'] = $gamesPurchaseMax;
        }
        if ($purchaseMin !== null) {
            $params['purchase_min'] = $purchaseMin;
        }
        if ($purchaseMax !== null) {
            $params['purchase_max'] = $purchaseMax;
        }
        if ($hasActivatedKeys !== null) {
            $params['has_activated_keys'] = $hasActivatedKeys;
        }
        if ($eloMin !== null) {
            $params['elo_min'] = $eloMin;
        }
        if ($eloMax !== null) {
            $params['elo_max'] = $eloMax;
        }
        if ($cs2MapRank !== null) {
            $params['cs2_map_rank'] = $cs2MapRank;
        }
        if ($cs2MapRmin !== null) {
            $params['cs2_map_rmin'] = $cs2MapRmin;
        }
        if ($cs2MapRmax !== null) {
            $params['cs2_map_rmax'] = $cs2MapRmax;
        }
        if ($hasFaceit !== null) {
            $params['has_faceit'] = $hasFaceit;
        }
        if ($faceitCsgoLvlMin !== null) {
            $params['faceit_csgo_lvl_min'] = $faceitCsgoLvlMin;
        }
        if ($faceitCsgoLvlMax !== null) {
            $params['faceit_csgo_lvl_max'] = $faceitCsgoLvlMax;
        }
        if ($rustDeathsMin !== null) {
            $params['rust_deaths_min'] = $rustDeathsMin;
        }
        if ($rustDeathsMax !== null) {
            $params['rust_deaths_max'] = $rustDeathsMax;
        }
        if ($rustKillsMin !== null) {
            $params['rust_kills_min'] = $rustKillsMin;
        }
        if ($rustKillsMax !== null) {
            $params['rust_kills_max'] = $rustKillsMax;
        }
        if ($d2LastMatchDate !== null) {
            $params['d2_last_match_date'] = $d2LastMatchDate;
        }
        if ($d2LastMatchDatePeriod !== null) {
            $params['d2_last_match_date_period'] = $d2LastMatchDatePeriod;
        }
        if ($cardsMin !== null) {
            $params['cards_min'] = $cardsMin;
        }
        if ($cardsMax !== null) {
            $params['cards_max'] = $cardsMax;
        }
        if ($cardsGamesMin !== null) {
            $params['cards_games_min'] = $cardsGamesMin;
        }
        if ($cardsGamesMax !== null) {
            $params['cards_games_max'] = $cardsGamesMax;
        }
        if ($skipVacInv !== null) {
            $params['skip_vac_inv'] = $skipVacInv;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategorySteamResponse::fromArray($response);
    }

    /**
     * Fortnite
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /fortnite
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param array|null $emailType Email type.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param string|null $tempEmail Access to market temp mail.
     * @param string|null $itemDomain Domain of native/autoreg email.
     * @param int|null $eg Guarantee type.
     * @param int|null $smin Minimum number of skins.
     * @param int|null $smax Maximum number of skins.
     * @param int|null $vbmin Minimum number of V-Bucks.
     * @param int|null $vbmax Maximum number of V-Bucks.
     * @param array|null $skin Skins.
     * @param array|null $pickaxe Pickaxes.
     * @param array|null $glider Gliders.
     * @param array|null $dance Dances.
     * @param string|null $changeEmail Can change email.
     * @param array|null $platform Platform.
     * @param int|null $skinsShopMin Minimum number of shop skins.
     * @param int|null $skinsShopMax Maximum number of shop skins.
     * @param int|null $pickaxesShopMin Minimum number of shop pickaxes.
     * @param int|null $pickaxesShopMax Maximum number of shop pickaxes.
     * @param int|null $dancesShopMin Minimum number of shop dances.
     * @param int|null $dancesShopMax Maximum number of shop dances.
     * @param int|null $glidersShopMin Minimum number of shop gliders.
     * @param int|null $glidersShopMax Maximum number of shop gliders.
     * @param int|null $skinsShopVbmin Minimum total cost of all skins in the shop in V-Bucks.
     * @param int|null $skinsShopVbmax Maximum total cost of all skins in the shop in V-Bucks.
     * @param int|null $pickaxesShopVbmin Minimum total cost of all pickaxes in the shop in V-Bucks.
     * @param int|null $pickaxesShopVbmax Maximum total cost of all pickaxes in the shop in V-Bucks.
     * @param int|null $dancesShopVbmin Minimum total cost of all dances in the shop in V-Bucks.
     * @param int|null $dancesShopVbmax Maximum total cost of all dances in the shop in V-Bucks.
     * @param int|null $glidersShopVbmin Minimum total cost of all gliders in the shop in V-Bucks.
     * @param int|null $glidersShopVbmax Maximum total cost of all gliders in the shop in V-Bucks.
     * @param string|null $bp Has Battle Pass.
     * @param int|null $lmin Minimum level.
     * @param int|null $lmax Maximum level.
     * @param int|null $bpLmin Minimum level of Battle Pass.
     * @param int|null $bpLmax Maximum level of Battle Pass.
     * @param int|null $lastTransDate How old is last transaction.
     * @param string|null $lastTransDatePeriod In what notation is time measured.
     * @param bool|null $noTrans Has no transactions.
     * @param string|null $xboxLinkable Can be linked to Xbox.
     * @param string|null $psnLinkable Can be linked to PSN.
     * @param int|null $daybreak Number of days the account has been offline.
     * @param bool|null $rlPurchases Has Rocket League purchases.
     * @param int|null $reg How old is the account.
     * @param string|null $regPeriod In what notation is time measured.
     * @param int|null $refundCreditsMin Minimum number of available refund credits.
     * @param int|null $refundCreditsMax Maximum number of available refund credits.
     * @param int|null $pickaxeMin Minimum number of pickaxes.
     * @param int|null $pickaxeMax Maximum number of pickaxes.
     * @param int|null $dmin Minimum number of dances.
     * @param int|null $dmax Maximum number of dances.
     * @param int|null $gmin Minimum number of gliders.
     * @param int|null $gmax Maximum number of gliders.
     * @param array|null $country List of allowed countries.
     * @param array|null $notCountry List of disallowed countries.
     * @return \Lolzteam\Generated\Market\Models\CategoryFortniteResponse
     */
    public function fortnite(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        array|null $emailType = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        string|null $tempEmail = null,
        string|null $itemDomain = null,
        int|null $eg = null,
        int|null $smin = null,
        int|null $smax = null,
        int|null $vbmin = null,
        int|null $vbmax = null,
        array|null $skin = null,
        array|null $pickaxe = null,
        array|null $glider = null,
        array|null $dance = null,
        string|null $changeEmail = null,
        array|null $platform = null,
        int|null $skinsShopMin = null,
        int|null $skinsShopMax = null,
        int|null $pickaxesShopMin = null,
        int|null $pickaxesShopMax = null,
        int|null $dancesShopMin = null,
        int|null $dancesShopMax = null,
        int|null $glidersShopMin = null,
        int|null $glidersShopMax = null,
        int|null $skinsShopVbmin = null,
        int|null $skinsShopVbmax = null,
        int|null $pickaxesShopVbmin = null,
        int|null $pickaxesShopVbmax = null,
        int|null $dancesShopVbmin = null,
        int|null $dancesShopVbmax = null,
        int|null $glidersShopVbmin = null,
        int|null $glidersShopVbmax = null,
        string|null $bp = null,
        int|null $lmin = null,
        int|null $lmax = null,
        int|null $bpLmin = null,
        int|null $bpLmax = null,
        int|null $lastTransDate = null,
        string|null $lastTransDatePeriod = null,
        bool|null $noTrans = null,
        string|null $xboxLinkable = null,
        string|null $psnLinkable = null,
        int|null $daybreak = null,
        bool|null $rlPurchases = null,
        int|null $reg = null,
        string|null $regPeriod = null,
        int|null $refundCreditsMin = null,
        int|null $refundCreditsMax = null,
        int|null $pickaxeMin = null,
        int|null $pickaxeMax = null,
        int|null $dmin = null,
        int|null $dmax = null,
        int|null $gmin = null,
        int|null $gmax = null,
        array|null $country = null,
        array|null $notCountry = null,
    ): \Lolzteam\Generated\Market\Models\CategoryFortniteResponse {
        $path = '/fortnite';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($emailType !== null) {
            $params['email_type[]'] = $emailType;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($tempEmail !== null) {
            $params['temp_email'] = $tempEmail;
        }
        if ($itemDomain !== null) {
            $params['item_domain'] = $itemDomain;
        }
        if ($eg !== null) {
            $params['eg'] = $eg;
        }
        if ($smin !== null) {
            $params['smin'] = $smin;
        }
        if ($smax !== null) {
            $params['smax'] = $smax;
        }
        if ($vbmin !== null) {
            $params['vbmin'] = $vbmin;
        }
        if ($vbmax !== null) {
            $params['vbmax'] = $vbmax;
        }
        if ($skin !== null) {
            $params['skin[]'] = $skin;
        }
        if ($pickaxe !== null) {
            $params['pickaxe[]'] = $pickaxe;
        }
        if ($glider !== null) {
            $params['glider[]'] = $glider;
        }
        if ($dance !== null) {
            $params['dance[]'] = $dance;
        }
        if ($changeEmail !== null) {
            $params['change_email'] = $changeEmail;
        }
        if ($platform !== null) {
            $params['platform[]'] = $platform;
        }
        if ($skinsShopMin !== null) {
            $params['skins_shop_min'] = $skinsShopMin;
        }
        if ($skinsShopMax !== null) {
            $params['skins_shop_max'] = $skinsShopMax;
        }
        if ($pickaxesShopMin !== null) {
            $params['pickaxes_shop_min'] = $pickaxesShopMin;
        }
        if ($pickaxesShopMax !== null) {
            $params['pickaxes_shop_max'] = $pickaxesShopMax;
        }
        if ($dancesShopMin !== null) {
            $params['dances_shop_min'] = $dancesShopMin;
        }
        if ($dancesShopMax !== null) {
            $params['dances_shop_max'] = $dancesShopMax;
        }
        if ($glidersShopMin !== null) {
            $params['gliders_shop_min'] = $glidersShopMin;
        }
        if ($glidersShopMax !== null) {
            $params['gliders_shop_max'] = $glidersShopMax;
        }
        if ($skinsShopVbmin !== null) {
            $params['skins_shop_vbmin'] = $skinsShopVbmin;
        }
        if ($skinsShopVbmax !== null) {
            $params['skins_shop_vbmax'] = $skinsShopVbmax;
        }
        if ($pickaxesShopVbmin !== null) {
            $params['pickaxes_shop_vbmin'] = $pickaxesShopVbmin;
        }
        if ($pickaxesShopVbmax !== null) {
            $params['pickaxes_shop_vbmax'] = $pickaxesShopVbmax;
        }
        if ($dancesShopVbmin !== null) {
            $params['dances_shop_vbmin'] = $dancesShopVbmin;
        }
        if ($dancesShopVbmax !== null) {
            $params['dances_shop_vbmax'] = $dancesShopVbmax;
        }
        if ($glidersShopVbmin !== null) {
            $params['gliders_shop_vbmin'] = $glidersShopVbmin;
        }
        if ($glidersShopVbmax !== null) {
            $params['gliders_shop_vbmax'] = $glidersShopVbmax;
        }
        if ($bp !== null) {
            $params['bp'] = $bp;
        }
        if ($lmin !== null) {
            $params['lmin'] = $lmin;
        }
        if ($lmax !== null) {
            $params['lmax'] = $lmax;
        }
        if ($bpLmin !== null) {
            $params['bp_lmin'] = $bpLmin;
        }
        if ($bpLmax !== null) {
            $params['bp_lmax'] = $bpLmax;
        }
        if ($lastTransDate !== null) {
            $params['last_trans_date'] = $lastTransDate;
        }
        if ($lastTransDatePeriod !== null) {
            $params['last_trans_date_period'] = $lastTransDatePeriod;
        }
        if ($noTrans !== null) {
            $params['no_trans'] = $noTrans;
        }
        if ($xboxLinkable !== null) {
            $params['xbox_linkable'] = $xboxLinkable;
        }
        if ($psnLinkable !== null) {
            $params['psn_linkable'] = $psnLinkable;
        }
        if ($daybreak !== null) {
            $params['daybreak'] = $daybreak;
        }
        if ($rlPurchases !== null) {
            $params['rl_purchases'] = $rlPurchases;
        }
        if ($reg !== null) {
            $params['reg'] = $reg;
        }
        if ($regPeriod !== null) {
            $params['reg_period'] = $regPeriod;
        }
        if ($refundCreditsMin !== null) {
            $params['refund_credits_min'] = $refundCreditsMin;
        }
        if ($refundCreditsMax !== null) {
            $params['refund_credits_max'] = $refundCreditsMax;
        }
        if ($pickaxeMin !== null) {
            $params['pickaxe_min'] = $pickaxeMin;
        }
        if ($pickaxeMax !== null) {
            $params['pickaxe_max'] = $pickaxeMax;
        }
        if ($dmin !== null) {
            $params['dmin'] = $dmin;
        }
        if ($dmax !== null) {
            $params['dmax'] = $dmax;
        }
        if ($gmin !== null) {
            $params['gmin'] = $gmin;
        }
        if ($gmax !== null) {
            $params['gmax'] = $gmax;
        }
        if ($country !== null) {
            $params['country[]'] = $country;
        }
        if ($notCountry !== null) {
            $params['not_country[]'] = $notCountry;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryFortniteResponse::fromArray($response);
    }

    /**
     * miHoYo
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /mihoyo
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param array|null $emailType Email type.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param string|null $itemDomain Domain of native/autoreg email.
     * @param string|null $email Has linked email.
     * @param string|null $ea Has linked external accounts.
     * @param array|null $region Region.
     * @param array|null $notRegion List of disallowed regions.
     * @param array|null $genshinCharacter List of characters.
     * @param array|null $genshinCharacterConstellations List of minimum constellations on characters.
     * @param array|null $genshinCharacterConstellationsMax List of maximum constellations on characters.
     * @param array|null $genshinWeapon List of weapons.
     * @param int|null $genshinCharMin Minimum number of characters.
     * @param int|null $genshinCharMax Maximum number of characters.
     * @param int|null $genshinLegendaryMin Minimum number of legendary characters.
     * @param int|null $genshinLegendaryMax Maximum number of legendary characters.
     * @param int|null $genshinLevelMin Minimum level.
     * @param int|null $genshinLevelMax Maximum level.
     * @param int|null $genshinLegendaryWeaponMin Minimum number of legendary weapon characters.
     * @param int|null $genshinLegendaryWeaponMax Maximum number of legendary weapon characters.
     * @param int|null $constellationsMin Minimum number of constellations on legendary characters.
     * @param int|null $constellationsMax Maximum number of constellations on legendary characters.
     * @param int|null $genshinAchievementMin Minimum number of achievements.
     * @param int|null $genshinAchievementMax Maximum number of achievements.
     * @param int|null $genshinCurrencyMin Minimum number of primogems.
     * @param int|null $genshinCurrencyMax Maximum number of primogems.
     * @param array|null $honkaiCharacter List of characters.
     * @param array|null $honkaiCharacterEidolons List of minimum eidolons on characters.
     * @param array|null $honkaiCharacterEidolonsMax List of maximum eidolons on characters.
     * @param array|null $honkaiWeapon List of weapons.
     * @param int|null $honkaiCharMin Minimum number of characters.
     * @param int|null $honkaiCharMax Maximum number of characters.
     * @param int|null $honkaiLegendaryMin Minimum number of legendary characters.
     * @param int|null $honkaiLegendaryMax Maximum number of legendary characters.
     * @param int|null $honkaiLevelMin Minimum level.
     * @param int|null $honkaiLevelMax Maximum level.
     * @param int|null $honkaiLegendaryWeaponMin Minimum number of legendary weapon characters.
     * @param int|null $honkaiLegendaryWeaponMax Maximum number of legendary weapon characters.
     * @param int|null $eidolonsMin Minimum number of constellations on Honkai: Star Rail legendary characters.
     * @param int|null $eidolonsMax Maximum number of legendary Honkai: Star Rail weapon characters.
     * @param int|null $honkaiAchievementMin Minimum number of achievements.
     * @param int|null $honkaiAchievementMax Maximum number of achievements.
     * @param int|null $honkaiCurrencyMin Minimum number of Stellar Jade.
     * @param int|null $honkaiCurrencyMax Maximum number of Stellar Jade.
     * @param array|null $zenlessCharacter List of Zenless Zone Zero characters.
     * @param array|null $zenlessCharacterCinemas List of minimum cinemas on characters.
     * @param array|null $zenlessCharacterCinemasMax List of maximum cinemas on characters.
     * @param array|null $zenlessWeapon List of Zenless Zone Zero weapons.
     * @param int|null $zenlessLegendaryMin Minimum number of Zenless Zone Zero legendary characters.
     * @param int|null $zenlessLegendaryMax Maximum number of Zenless Zone Zero legendary characters.
     * @param int|null $cinemasMin Minimum number of cinemas on Zenless Zone Zero characters.
     * @param int|null $cinemasMax Maximum number of cinemas on Zenless Zone Zero characters.
     * @param int|null $zenlessLegendaryWeaponMin Minimum number of legendary Zenless Zone Zero weapon characters.
     * @param int|null $zenlessLegendaryWeaponMax Maximum number of legendary Zenless Zone Zero weapon characters.
     * @param int|null $zenlessCharMin Minimum number of Zenless Zone Zero characters.
     * @param int|null $zenlessCharMax Maximum number of Zenless Zone Zero characters.
     * @param int|null $zenlessLevelMin Minimum Zenless Zone Zero level.
     * @param int|null $zenlessLevelMax Maximum Zenless Zone Zero level.
     * @param int|null $zenlessAchievementMin Minimum count of Zenless Zone Zero achievements.
     * @param int|null $zenlessAchievementMax Maximum count of Zenless Zone Zero achievements.
     * @param int|null $zenlessCurrencyMin Minimum count of Zenless Zone Zero polychrome.
     * @param int|null $zenlessCurrencyMax Maximum count of Zenless Zone Zero polychrome.
     * @param int|null $daybreak Number of days the account has been offline.
     * @return \Lolzteam\Generated\Market\Models\CategoryMihoyoResponse
     */
    public function mihoyo(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        array|null $emailType = null,
        bool|null $parseSameItemIds = null,
        string|null $itemDomain = null,
        string|null $email = null,
        string|null $ea = null,
        array|null $region = null,
        array|null $notRegion = null,
        array|null $genshinCharacter = null,
        array|null $genshinCharacterConstellations = null,
        array|null $genshinCharacterConstellationsMax = null,
        array|null $genshinWeapon = null,
        int|null $genshinCharMin = null,
        int|null $genshinCharMax = null,
        int|null $genshinLegendaryMin = null,
        int|null $genshinLegendaryMax = null,
        int|null $genshinLevelMin = null,
        int|null $genshinLevelMax = null,
        int|null $genshinLegendaryWeaponMin = null,
        int|null $genshinLegendaryWeaponMax = null,
        int|null $constellationsMin = null,
        int|null $constellationsMax = null,
        int|null $genshinAchievementMin = null,
        int|null $genshinAchievementMax = null,
        int|null $genshinCurrencyMin = null,
        int|null $genshinCurrencyMax = null,
        array|null $honkaiCharacter = null,
        array|null $honkaiCharacterEidolons = null,
        array|null $honkaiCharacterEidolonsMax = null,
        array|null $honkaiWeapon = null,
        int|null $honkaiCharMin = null,
        int|null $honkaiCharMax = null,
        int|null $honkaiLegendaryMin = null,
        int|null $honkaiLegendaryMax = null,
        int|null $honkaiLevelMin = null,
        int|null $honkaiLevelMax = null,
        int|null $honkaiLegendaryWeaponMin = null,
        int|null $honkaiLegendaryWeaponMax = null,
        int|null $eidolonsMin = null,
        int|null $eidolonsMax = null,
        int|null $honkaiAchievementMin = null,
        int|null $honkaiAchievementMax = null,
        int|null $honkaiCurrencyMin = null,
        int|null $honkaiCurrencyMax = null,
        array|null $zenlessCharacter = null,
        array|null $zenlessCharacterCinemas = null,
        array|null $zenlessCharacterCinemasMax = null,
        array|null $zenlessWeapon = null,
        int|null $zenlessLegendaryMin = null,
        int|null $zenlessLegendaryMax = null,
        int|null $cinemasMin = null,
        int|null $cinemasMax = null,
        int|null $zenlessLegendaryWeaponMin = null,
        int|null $zenlessLegendaryWeaponMax = null,
        int|null $zenlessCharMin = null,
        int|null $zenlessCharMax = null,
        int|null $zenlessLevelMin = null,
        int|null $zenlessLevelMax = null,
        int|null $zenlessAchievementMin = null,
        int|null $zenlessAchievementMax = null,
        int|null $zenlessCurrencyMin = null,
        int|null $zenlessCurrencyMax = null,
        int|null $daybreak = null,
    ): \Lolzteam\Generated\Market\Models\CategoryMihoyoResponse {
        $path = '/mihoyo';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($emailType !== null) {
            $params['email_type[]'] = $emailType;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($itemDomain !== null) {
            $params['item_domain'] = $itemDomain;
        }
        if ($email !== null) {
            $params['email'] = $email;
        }
        if ($ea !== null) {
            $params['ea'] = $ea;
        }
        if ($region !== null) {
            $params['region'] = $region;
        }
        if ($notRegion !== null) {
            $params['not_region'] = $notRegion;
        }
        if ($genshinCharacter !== null) {
            $params['genshin_character[]'] = $genshinCharacter;
        }
        if ($genshinCharacterConstellations !== null) {
            foreach ($genshinCharacterConstellations as $k => $v) {
                $params['genshin_character_constellations[' . $k . ']'] = $v;
            }
        }
        if ($genshinCharacterConstellationsMax !== null) {
            foreach ($genshinCharacterConstellationsMax as $k => $v) {
                $params['genshin_character_constellations_max[' . $k . ']'] = $v;
            }
        }
        if ($genshinWeapon !== null) {
            $params['genshin_weapon[]'] = $genshinWeapon;
        }
        if ($genshinCharMin !== null) {
            $params['genshin_char_min'] = $genshinCharMin;
        }
        if ($genshinCharMax !== null) {
            $params['genshin_char_max'] = $genshinCharMax;
        }
        if ($genshinLegendaryMin !== null) {
            $params['genshin_legendary_min'] = $genshinLegendaryMin;
        }
        if ($genshinLegendaryMax !== null) {
            $params['genshin_legendary_max'] = $genshinLegendaryMax;
        }
        if ($genshinLevelMin !== null) {
            $params['genshin_level_min'] = $genshinLevelMin;
        }
        if ($genshinLevelMax !== null) {
            $params['genshin_level_max'] = $genshinLevelMax;
        }
        if ($genshinLegendaryWeaponMin !== null) {
            $params['genshin_legendary_weapon_min'] = $genshinLegendaryWeaponMin;
        }
        if ($genshinLegendaryWeaponMax !== null) {
            $params['genshin_legendary_weapon_max'] = $genshinLegendaryWeaponMax;
        }
        if ($constellationsMin !== null) {
            $params['constellations_min'] = $constellationsMin;
        }
        if ($constellationsMax !== null) {
            $params['constellations_max'] = $constellationsMax;
        }
        if ($genshinAchievementMin !== null) {
            $params['genshin_achievement_min'] = $genshinAchievementMin;
        }
        if ($genshinAchievementMax !== null) {
            $params['genshin_achievement_max'] = $genshinAchievementMax;
        }
        if ($genshinCurrencyMin !== null) {
            $params['genshin_currency_min'] = $genshinCurrencyMin;
        }
        if ($genshinCurrencyMax !== null) {
            $params['genshin_currency_max'] = $genshinCurrencyMax;
        }
        if ($honkaiCharacter !== null) {
            $params['honkai_character[]'] = $honkaiCharacter;
        }
        if ($honkaiCharacterEidolons !== null) {
            foreach ($honkaiCharacterEidolons as $k => $v) {
                $params['honkai_character_eidolons[' . $k . ']'] = $v;
            }
        }
        if ($honkaiCharacterEidolonsMax !== null) {
            foreach ($honkaiCharacterEidolonsMax as $k => $v) {
                $params['honkai_character_eidolons_max[' . $k . ']'] = $v;
            }
        }
        if ($honkaiWeapon !== null) {
            $params['honkai_weapon[]'] = $honkaiWeapon;
        }
        if ($honkaiCharMin !== null) {
            $params['honkai_char_min'] = $honkaiCharMin;
        }
        if ($honkaiCharMax !== null) {
            $params['honkai_char_max'] = $honkaiCharMax;
        }
        if ($honkaiLegendaryMin !== null) {
            $params['honkai_legendary_min'] = $honkaiLegendaryMin;
        }
        if ($honkaiLegendaryMax !== null) {
            $params['honkai_legendary_max'] = $honkaiLegendaryMax;
        }
        if ($honkaiLevelMin !== null) {
            $params['honkai_level_min'] = $honkaiLevelMin;
        }
        if ($honkaiLevelMax !== null) {
            $params['honkai_level_max'] = $honkaiLevelMax;
        }
        if ($honkaiLegendaryWeaponMin !== null) {
            $params['honkai_legendary_weapon_min'] = $honkaiLegendaryWeaponMin;
        }
        if ($honkaiLegendaryWeaponMax !== null) {
            $params['honkai_legendary_weapon_max'] = $honkaiLegendaryWeaponMax;
        }
        if ($eidolonsMin !== null) {
            $params['eidolons_min'] = $eidolonsMin;
        }
        if ($eidolonsMax !== null) {
            $params['eidolons_max'] = $eidolonsMax;
        }
        if ($honkaiAchievementMin !== null) {
            $params['honkai_achievement_min'] = $honkaiAchievementMin;
        }
        if ($honkaiAchievementMax !== null) {
            $params['honkai_achievement_max'] = $honkaiAchievementMax;
        }
        if ($honkaiCurrencyMin !== null) {
            $params['honkai_currency_min'] = $honkaiCurrencyMin;
        }
        if ($honkaiCurrencyMax !== null) {
            $params['honkai_currency_max'] = $honkaiCurrencyMax;
        }
        if ($zenlessCharacter !== null) {
            $params['zenless_character[]'] = $zenlessCharacter;
        }
        if ($zenlessCharacterCinemas !== null) {
            foreach ($zenlessCharacterCinemas as $k => $v) {
                $params['zenless_character_cinemas[' . $k . ']'] = $v;
            }
        }
        if ($zenlessCharacterCinemasMax !== null) {
            foreach ($zenlessCharacterCinemasMax as $k => $v) {
                $params['zenless_character_cinemas_max[' . $k . ']'] = $v;
            }
        }
        if ($zenlessWeapon !== null) {
            $params['zenless_weapon[]'] = $zenlessWeapon;
        }
        if ($zenlessLegendaryMin !== null) {
            $params['zenless_legendary_min'] = $zenlessLegendaryMin;
        }
        if ($zenlessLegendaryMax !== null) {
            $params['zenless_legendary_max'] = $zenlessLegendaryMax;
        }
        if ($cinemasMin !== null) {
            $params['cinemas_min'] = $cinemasMin;
        }
        if ($cinemasMax !== null) {
            $params['cinemas_max'] = $cinemasMax;
        }
        if ($zenlessLegendaryWeaponMin !== null) {
            $params['zenless_legendary_weapon_min'] = $zenlessLegendaryWeaponMin;
        }
        if ($zenlessLegendaryWeaponMax !== null) {
            $params['zenless_legendary_weapon_max'] = $zenlessLegendaryWeaponMax;
        }
        if ($zenlessCharMin !== null) {
            $params['zenless_char_min'] = $zenlessCharMin;
        }
        if ($zenlessCharMax !== null) {
            $params['zenless_char_max'] = $zenlessCharMax;
        }
        if ($zenlessLevelMin !== null) {
            $params['zenless_level_min'] = $zenlessLevelMin;
        }
        if ($zenlessLevelMax !== null) {
            $params['zenless_level_max'] = $zenlessLevelMax;
        }
        if ($zenlessAchievementMin !== null) {
            $params['zenless_achievement_min'] = $zenlessAchievementMin;
        }
        if ($zenlessAchievementMax !== null) {
            $params['zenless_achievement_max'] = $zenlessAchievementMax;
        }
        if ($zenlessCurrencyMin !== null) {
            $params['zenless_currency_min'] = $zenlessCurrencyMin;
        }
        if ($zenlessCurrencyMax !== null) {
            $params['zenless_currency_max'] = $zenlessCurrencyMax;
        }
        if ($daybreak !== null) {
            $params['daybreak'] = $daybreak;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryMihoyoResponse::fromArray($response);
    }

    /**
     * Riot
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /riot
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param array|null $emailType Email type.
     * @param string|null $itemDomain Domain of native/autoreg email.
     * @param int|null $rmin Minimum valorant rank.
     * @param int|null $rmax Maximum valorant rank.
     * @param int|null $lastRmin Last minimum valorant rank.
     * @param int|null $lastRmax Last maximum valorant rank.
     * @param int|null $previousRmin Previous minimum rank.
     * @param int|null $previousRmax Previous maximum rank.
     * @param array|null $weaponSkin List of weapon skins.
     * @param array|null $buddy List of buddies.
     * @param array|null $agent List of agents.
     * @param array|null $champion List of champions.
     * @param array|null $skin List of LoL skins.
     * @param array|null $country List of allowed countries.
     * @param array|null $notCountry List of disallowed countries.
     * @param int|null $daybreak Number of days the account has been offline.
     * @param int|null $valorantLevelMin Minimum level in Valorant.
     * @param int|null $valorantLevelMax Maximum level in Valorant.
     * @param int|null $lolLevelMin Minimum level in LoL.
     * @param int|null $lolLevelMax Maximum level in LoL.
     * @param int|null $invMin Minimum inventory value.
     * @param int|null $invMax Maximum inventory value.
     * @param int|null $vpMin Minimum number of Valorant points.
     * @param int|null $vpMax Maximum number of Valorant points.
     * @param int|null $valorantSmin Minimum number of skins.
     * @param int|null $valorantSmax Maximum number of skins.
     * @param array|null $valorantRankType List of allowed rank types.
     * @param int|null $amin Minimum amount of agents.
     * @param int|null $amax Maximum amount of agents.
     * @param array|null $valorantRegion List of allowed regions in Valorant.
     * @param array|null $valorantNotRegion List of disallowed regions in Valorant.
     * @param array|null $lolRegion List of allowed regions in LoL.
     * @param array|null $lolNotRegion List of disallowed regions in LoL.
     * @param bool|null $knife Has any knife.
     * @param int|null $lolSmin Minimum number of skins in LoL.
     * @param int|null $lolSmax Maximum number of skins in LoL.
     * @param int|null $championMin Minimum number of champions.
     * @param int|null $championMax Maximum number of champions.
     * @param int|null $winRateMin Minimum win-rate.
     * @param int|null $winRateMax Maximum win-rate.
     * @param int|null $blueMin Minimum wallet blue balance.
     * @param int|null $blueMax Maximum wallet blue balance.
     * @param int|null $orangeMin Minimum wallet orange balance.
     * @param int|null $orangeMax Maximum wallet orange balance.
     * @param int|null $mythicMin Minimum wallet mythic balance.
     * @param int|null $mythicMax Maximum wallet mythic balance.
     * @param int|null $riotMin Minimum wallet riot balance.
     * @param int|null $riotMax Maximum wallet riot balance.
     * @param string|null $email Has linked email.
     * @param string|null $tel Has linked mobile.
     * @param int|null $valorantKnifeMin Minimum knifes in Valorant.
     * @param int|null $valorantKnifeMax Maximum knifes in Valorant.
     * @param int|null $rpMin Minimum number of Valorant Radiant Points.
     * @param int|null $rpMax Maximum number of Valorant Radiant Points.
     * @param int|null $faMin Minimum number of Valorant free agents.
     * @param int|null $faMax Maximum number of Valorant free agents.
     * @param array|null $lolRank List of allowed ranks in LoL.
     * @return \Lolzteam\Generated\Market\Models\CategoryRiotResponse
     */
    public function riot(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        array|null $emailType = null,
        string|null $itemDomain = null,
        int|null $rmin = null,
        int|null $rmax = null,
        int|null $lastRmin = null,
        int|null $lastRmax = null,
        int|null $previousRmin = null,
        int|null $previousRmax = null,
        array|null $weaponSkin = null,
        array|null $buddy = null,
        array|null $agent = null,
        array|null $champion = null,
        array|null $skin = null,
        array|null $country = null,
        array|null $notCountry = null,
        int|null $daybreak = null,
        int|null $valorantLevelMin = null,
        int|null $valorantLevelMax = null,
        int|null $lolLevelMin = null,
        int|null $lolLevelMax = null,
        int|null $invMin = null,
        int|null $invMax = null,
        int|null $vpMin = null,
        int|null $vpMax = null,
        int|null $valorantSmin = null,
        int|null $valorantSmax = null,
        array|null $valorantRankType = null,
        int|null $amin = null,
        int|null $amax = null,
        array|null $valorantRegion = null,
        array|null $valorantNotRegion = null,
        array|null $lolRegion = null,
        array|null $lolNotRegion = null,
        bool|null $knife = null,
        int|null $lolSmin = null,
        int|null $lolSmax = null,
        int|null $championMin = null,
        int|null $championMax = null,
        int|null $winRateMin = null,
        int|null $winRateMax = null,
        int|null $blueMin = null,
        int|null $blueMax = null,
        int|null $orangeMin = null,
        int|null $orangeMax = null,
        int|null $mythicMin = null,
        int|null $mythicMax = null,
        int|null $riotMin = null,
        int|null $riotMax = null,
        string|null $email = null,
        string|null $tel = null,
        int|null $valorantKnifeMin = null,
        int|null $valorantKnifeMax = null,
        int|null $rpMin = null,
        int|null $rpMax = null,
        int|null $faMin = null,
        int|null $faMax = null,
        array|null $lolRank = null,
    ): \Lolzteam\Generated\Market\Models\CategoryRiotResponse {
        $path = '/riot';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($emailType !== null) {
            $params['email_type[]'] = $emailType;
        }
        if ($itemDomain !== null) {
            $params['item_domain'] = $itemDomain;
        }
        if ($rmin !== null) {
            $params['rmin'] = $rmin;
        }
        if ($rmax !== null) {
            $params['rmax'] = $rmax;
        }
        if ($lastRmin !== null) {
            $params['last_rmin'] = $lastRmin;
        }
        if ($lastRmax !== null) {
            $params['last_rmax'] = $lastRmax;
        }
        if ($previousRmin !== null) {
            $params['previous_rmin'] = $previousRmin;
        }
        if ($previousRmax !== null) {
            $params['previous_rmax'] = $previousRmax;
        }
        if ($weaponSkin !== null) {
            $params['weaponSkin[]'] = $weaponSkin;
        }
        if ($buddy !== null) {
            $params['buddy[]'] = $buddy;
        }
        if ($agent !== null) {
            $params['agent[]'] = $agent;
        }
        if ($champion !== null) {
            $params['champion[]'] = $champion;
        }
        if ($skin !== null) {
            $params['skin[]'] = $skin;
        }
        if ($country !== null) {
            $params['country[]'] = $country;
        }
        if ($notCountry !== null) {
            $params['not_country[]'] = $notCountry;
        }
        if ($daybreak !== null) {
            $params['daybreak'] = $daybreak;
        }
        if ($valorantLevelMin !== null) {
            $params['valorant_level_min'] = $valorantLevelMin;
        }
        if ($valorantLevelMax !== null) {
            $params['valorant_level_max'] = $valorantLevelMax;
        }
        if ($lolLevelMin !== null) {
            $params['lol_level_min'] = $lolLevelMin;
        }
        if ($lolLevelMax !== null) {
            $params['lol_level_max'] = $lolLevelMax;
        }
        if ($invMin !== null) {
            $params['inv_min'] = $invMin;
        }
        if ($invMax !== null) {
            $params['inv_max'] = $invMax;
        }
        if ($vpMin !== null) {
            $params['vp_min'] = $vpMin;
        }
        if ($vpMax !== null) {
            $params['vp_max'] = $vpMax;
        }
        if ($valorantSmin !== null) {
            $params['valorant_smin'] = $valorantSmin;
        }
        if ($valorantSmax !== null) {
            $params['valorant_smax'] = $valorantSmax;
        }
        if ($valorantRankType !== null) {
            $params['valorant_rank_type[]'] = $valorantRankType;
        }
        if ($amin !== null) {
            $params['amin'] = $amin;
        }
        if ($amax !== null) {
            $params['amax'] = $amax;
        }
        if ($valorantRegion !== null) {
            $params['valorant_region[]'] = $valorantRegion;
        }
        if ($valorantNotRegion !== null) {
            $params['valorant_not_region[]'] = $valorantNotRegion;
        }
        if ($lolRegion !== null) {
            $params['lol_region[]'] = $lolRegion;
        }
        if ($lolNotRegion !== null) {
            $params['lol_not_region[]'] = $lolNotRegion;
        }
        if ($knife !== null) {
            $params['knife'] = $knife;
        }
        if ($lolSmin !== null) {
            $params['lol_smin'] = $lolSmin;
        }
        if ($lolSmax !== null) {
            $params['lol_smax'] = $lolSmax;
        }
        if ($championMin !== null) {
            $params['champion_min'] = $championMin;
        }
        if ($championMax !== null) {
            $params['champion_max'] = $championMax;
        }
        if ($winRateMin !== null) {
            $params['win_rate_min'] = $winRateMin;
        }
        if ($winRateMax !== null) {
            $params['win_rate_max'] = $winRateMax;
        }
        if ($blueMin !== null) {
            $params['blue_min'] = $blueMin;
        }
        if ($blueMax !== null) {
            $params['blue_max'] = $blueMax;
        }
        if ($orangeMin !== null) {
            $params['orange_min'] = $orangeMin;
        }
        if ($orangeMax !== null) {
            $params['orange_max'] = $orangeMax;
        }
        if ($mythicMin !== null) {
            $params['mythic_min'] = $mythicMin;
        }
        if ($mythicMax !== null) {
            $params['mythic_max'] = $mythicMax;
        }
        if ($riotMin !== null) {
            $params['riot_min'] = $riotMin;
        }
        if ($riotMax !== null) {
            $params['riot_max'] = $riotMax;
        }
        if ($email !== null) {
            $params['email'] = $email;
        }
        if ($tel !== null) {
            $params['tel'] = $tel;
        }
        if ($valorantKnifeMin !== null) {
            $params['valorant_knife_min'] = $valorantKnifeMin;
        }
        if ($valorantKnifeMax !== null) {
            $params['valorant_knife_max'] = $valorantKnifeMax;
        }
        if ($rpMin !== null) {
            $params['rp_min'] = $rpMin;
        }
        if ($rpMax !== null) {
            $params['rp_max'] = $rpMax;
        }
        if ($faMin !== null) {
            $params['fa_min'] = $faMin;
        }
        if ($faMax !== null) {
            $params['fa_max'] = $faMax;
        }
        if ($lolRank !== null) {
            $params['lol_rank[]'] = $lolRank;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryRiotResponse::fromArray($response);
    }

    /**
     * Telegram
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /telegram
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param string|null $spam Has a spam ban.
     * @param string|null $password Has a cloud password.
     * @param string|null $premium Has a premium subscription.
     * @param int|null $premiumExpiration When premium subscription will be active
     * @param string|null $premiumExpirationPeriod In what notation is time measured
     * @param array|null $country List of allowed countries.
     * @param array|null $notCountry List of disallowed countries.
     * @param int|null $daybreak Number of days the account has been offline.
     * @param int|null $minChannels Minimum number of channels.
     * @param int|null $maxChannels Maximum number of channels.
     * @param int|null $minChats Minimum number of chats.
     * @param int|null $maxChats Maximum number of chats.
     * @param int|null $minConversations Minimum number of conversations.
     * @param int|null $maxConversations Maximum number of conversations.
     * @param int|null $minAdmin Minimum number of channels, where account is administrator/owner.
     * @param int|null $maxAdmin Maximum number of channels, where account is administrator/owner.
     * @param int|null $minAdminSub Minimum number of subscribers in channel, where account is administrator/owner.
     * @param int|null $maxAdminSub Maximum number of subscribers in channel, where account is administrator/owner.
     * @param int|null $digMin Minimum number of digits in ID.
     * @param int|null $digMax Maximum number of digits in ID.
     * @param int|null $minContacts Minimum number of contacts.
     * @param int|null $maxContacts Maximum number of contacts.
     * @param int|null $minStars Minimum number of Telegram Stars.
     * @param int|null $maxStars Maximum number of Telegram Stars.
     * @param int|null $birthday Birthday was X time before.
     * @param string|null $birthdayPeriod In what notation is time measured.
     * @param int|null $birthdayAfter Birthday was X time after.
     * @param string|null $birthdayAfterPeriod In what notation is time measured.
     * @param int|null $minId Minimum ID of account, will be rounded down till nearest 10k. Available if your balance is higher than 100000 RUB.
     * @param int|null $maxId Maximum ID of account, will be rounded down till nearest 10k. Available if your balance is higher than 100000 RUB.
     * @param bool|null $allowGeoSpamblock Allow geo spam block in search with spam=no.
     * @param int|null $minGifts Minimum number of Telegram gifts on account.
     * @param int|null $maxGifts Maximum number of Telegram gifts on account.
     * @param int|null $minNftGifts Minimum number of Telegram NFT gifts on account.
     * @param int|null $maxNftGifts Maximum number of Telegram NFT gifts on account.
     * @param int|null $minGiftsStars Minimum value of all Stars gifts.
     * @param int|null $maxGiftsStars Maximum value of all Stars gifts.
     * @param int|null $minGiftsConvertStars Minimum value of all Stars gifts after convert.
     * @param int|null $maxGiftsConvertStars Maximum value of all Stars gifts after convert.
     * @param array|null $dcId List of allowed DC ID.
     * @param array|null $notDcId List of disallowed DC ID.
     * @param string|null $email Has linked email.
     * @param int|null $minBots Minimum number of bots.
     * @param int|null $maxBots Maximum number of bots.
     * @param int|null $minBotActiveUsers Minimum active users in bot.
     * @param int|null $maxBotActiveUsers Maximum active users in bot.
     * @return \Lolzteam\Generated\Market\Models\CategoryTelegramResponse
     */
    public function telegram(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        string|null $spam = null,
        string|null $password = null,
        string|null $premium = null,
        int|null $premiumExpiration = null,
        string|null $premiumExpirationPeriod = null,
        array|null $country = null,
        array|null $notCountry = null,
        int|null $daybreak = null,
        int|null $minChannels = null,
        int|null $maxChannels = null,
        int|null $minChats = null,
        int|null $maxChats = null,
        int|null $minConversations = null,
        int|null $maxConversations = null,
        int|null $minAdmin = null,
        int|null $maxAdmin = null,
        int|null $minAdminSub = null,
        int|null $maxAdminSub = null,
        int|null $digMin = null,
        int|null $digMax = null,
        int|null $minContacts = null,
        int|null $maxContacts = null,
        int|null $minStars = null,
        int|null $maxStars = null,
        int|null $birthday = null,
        string|null $birthdayPeriod = null,
        int|null $birthdayAfter = null,
        string|null $birthdayAfterPeriod = null,
        int|null $minId = null,
        int|null $maxId = null,
        bool|null $allowGeoSpamblock = null,
        int|null $minGifts = null,
        int|null $maxGifts = null,
        int|null $minNftGifts = null,
        int|null $maxNftGifts = null,
        int|null $minGiftsStars = null,
        int|null $maxGiftsStars = null,
        int|null $minGiftsConvertStars = null,
        int|null $maxGiftsConvertStars = null,
        array|null $dcId = null,
        array|null $notDcId = null,
        string|null $email = null,
        int|null $minBots = null,
        int|null $maxBots = null,
        int|null $minBotActiveUsers = null,
        int|null $maxBotActiveUsers = null,
    ): \Lolzteam\Generated\Market\Models\CategoryTelegramResponse {
        $path = '/telegram';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($spam !== null) {
            $params['spam'] = $spam;
        }
        if ($password !== null) {
            $params['password'] = $password;
        }
        if ($premium !== null) {
            $params['premium'] = $premium;
        }
        if ($premiumExpiration !== null) {
            $params['premium_expiration'] = $premiumExpiration;
        }
        if ($premiumExpirationPeriod !== null) {
            $params['premium_expiration_period'] = $premiumExpirationPeriod;
        }
        if ($country !== null) {
            $params['country[]'] = $country;
        }
        if ($notCountry !== null) {
            $params['not_country[]'] = $notCountry;
        }
        if ($daybreak !== null) {
            $params['daybreak'] = $daybreak;
        }
        if ($minChannels !== null) {
            $params['min_channels'] = $minChannels;
        }
        if ($maxChannels !== null) {
            $params['max_channels'] = $maxChannels;
        }
        if ($minChats !== null) {
            $params['min_chats'] = $minChats;
        }
        if ($maxChats !== null) {
            $params['max_chats'] = $maxChats;
        }
        if ($minConversations !== null) {
            $params['min_conversations'] = $minConversations;
        }
        if ($maxConversations !== null) {
            $params['max_conversations'] = $maxConversations;
        }
        if ($minAdmin !== null) {
            $params['min_admin'] = $minAdmin;
        }
        if ($maxAdmin !== null) {
            $params['max_admin'] = $maxAdmin;
        }
        if ($minAdminSub !== null) {
            $params['min_admin_sub'] = $minAdminSub;
        }
        if ($maxAdminSub !== null) {
            $params['max_admin_sub'] = $maxAdminSub;
        }
        if ($digMin !== null) {
            $params['dig_min'] = $digMin;
        }
        if ($digMax !== null) {
            $params['dig_max'] = $digMax;
        }
        if ($minContacts !== null) {
            $params['min_contacts'] = $minContacts;
        }
        if ($maxContacts !== null) {
            $params['max_contacts'] = $maxContacts;
        }
        if ($minStars !== null) {
            $params['min_stars'] = $minStars;
        }
        if ($maxStars !== null) {
            $params['max_stars'] = $maxStars;
        }
        if ($birthday !== null) {
            $params['birthday'] = $birthday;
        }
        if ($birthdayPeriod !== null) {
            $params['birthday_period'] = $birthdayPeriod;
        }
        if ($birthdayAfter !== null) {
            $params['birthday_after'] = $birthdayAfter;
        }
        if ($birthdayAfterPeriod !== null) {
            $params['birthday_after_period'] = $birthdayAfterPeriod;
        }
        if ($minId !== null) {
            $params['min_id'] = $minId;
        }
        if ($maxId !== null) {
            $params['max_id'] = $maxId;
        }
        if ($allowGeoSpamblock !== null) {
            $params['allow_geo_spamblock'] = $allowGeoSpamblock;
        }
        if ($minGifts !== null) {
            $params['min_gifts'] = $minGifts;
        }
        if ($maxGifts !== null) {
            $params['max_gifts'] = $maxGifts;
        }
        if ($minNftGifts !== null) {
            $params['min_nft_gifts'] = $minNftGifts;
        }
        if ($maxNftGifts !== null) {
            $params['max_nft_gifts'] = $maxNftGifts;
        }
        if ($minGiftsStars !== null) {
            $params['min_gifts_stars'] = $minGiftsStars;
        }
        if ($maxGiftsStars !== null) {
            $params['max_gifts_stars'] = $maxGiftsStars;
        }
        if ($minGiftsConvertStars !== null) {
            $params['min_gifts_convert_stars'] = $minGiftsConvertStars;
        }
        if ($maxGiftsConvertStars !== null) {
            $params['max_gifts_convert_stars'] = $maxGiftsConvertStars;
        }
        if ($dcId !== null) {
            $params['dc_id[]'] = $dcId;
        }
        if ($notDcId !== null) {
            $params['not_dc_id[]'] = $notDcId;
        }
        if ($email !== null) {
            $params['email'] = $email;
        }
        if ($minBots !== null) {
            $params['min_bots'] = $minBots;
        }
        if ($maxBots !== null) {
            $params['max_bots'] = $maxBots;
        }
        if ($minBotActiveUsers !== null) {
            $params['min_bot_active_users'] = $minBotActiveUsers;
        }
        if ($maxBotActiveUsers !== null) {
            $params['max_bot_active_users'] = $maxBotActiveUsers;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryTelegramResponse::fromArray($response);
    }

    /**
     * Supercell
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /supercell
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param int|null $daybreak Number of days the account has been offline.
     * @param array|null $emailType Email type.
     * @param string|null $itemDomain Domain of native/autoreg email.
     * @param int|null $eg Guarantee type.
     * @param string|null $tel Has linked mobile.
     * @param int|null $brawlLevelMin Minimum Brawl Stars level.
     * @param int|null $brawlLevelMax Maximum Brawl Stars level.
     * @param int|null $brawlCupMin Minimum number of Brawl Stars trophies.
     * @param int|null $brawlCupMax Maximum number of Brawl Stars trophies.
     * @param int|null $brawlWinsMin Minimum number of Brawl Stars wins.
     * @param int|null $brawlWinsMax Maximum number of Brawl Stars wins.
     * @param string|null $brawlPass Has Brawl Pass.
     * @param array|null $brawler List of brawlers.
     * @param int|null $brawlersMin Minimum number of brawlers.
     * @param int|null $brawlersMax Maximum number of brawlers.
     * @param int|null $legendaryBrawlersMin Minimum number of legendary brawlers.
     * @param int|null $legendaryBrawlersMax Maximum number of legendary brawlers.
     * @param int|null $royaleLevelMin Minimum Clash Royale level.
     * @param int|null $royaleLevelMax Maximum Clash Royale level.
     * @param int|null $royaleCupMin Minimum number of Clash Royale trophies.
     * @param int|null $royaleCupMax Maximum number of Clash Royale trophies.
     * @param int|null $royaleWinsMin Minimum number of Clash Royale wins.
     * @param int|null $royaleWinsMax Maximum number of Clash Royale wins.
     * @param int|null $kingLevelMin Minimum King level in Clash Royale.
     * @param int|null $kingLevelMax Maximum King level in Clash Royale.
     * @param string|null $royalePass Has Royale Pass.
     * @param int|null $clashLevelMin Minimum Clash of Clans level.
     * @param int|null $clashLevelMax Maximum Clash of Clans level.
     * @param int|null $clashCupMin Minimum number of Clash of Clans trophies.
     * @param int|null $clashCupMax Maximum number of Clash of Clans trophies.
     * @param int|null $clashWinsMin Minimum number of Clash of Clans wins.
     * @param int|null $clashWinsMax Maximum number of Clash of Clans wins.
     * @param string|null $clashPass Has Battle Pass.
     * @param int|null $totalHeroesLevelMin Minimum total heroes level count in Clash of Clans.
     * @param int|null $totalHeroesLevelMax Maximum total heroes level count in Clash of Clans.
     * @param int|null $totalTroopsLevelMin Minimum total troops level count in Clash of Clans.
     * @param int|null $totalTroopsLevelMax Maximum total troops level count in Clash of Clans.
     * @param int|null $totalSpellsLevelMin Minimum total spells level count in Clash of Clans.
     * @param int|null $totalSpellsLevelMax Maximum total spells level count in Clash of Clans.
     * @param int|null $totalBuilderHeroesLevelMin Minimum total builder village heroes level count in Clash of Clans.
     * @param int|null $totalBuilderHeroesLevelMax Maximum total builder village heroes level count in Clash of Clans.
     * @param int|null $totalBuilderTroopsLevelMin Minimum total builder village troops level count in Clash of Clans.
     * @param int|null $totalBuilderTroopsLevelMax Maximum total builder village troops level count in Clash of Clans.
     * @param int|null $townHallLevelMin Minimum level of town hall.
     * @param int|null $townHallLevelMax Maximum level of town hall.
     * @param int|null $builderHallLevelMin Minimum level of builder hall.
     * @param int|null $builderHallLevelMax Maximum level of builder hall.
     * @param int|null $builderHallCupMin Minimum number of builder hall cups.
     * @param int|null $builderHallCupMax Maximum number of builder hall cups.
     * @param int|null $creationYearMin Minimum account creation year (e.g. 2023).
     * @param int|null $creationYearMax Maximum account creation year (e.g. 2024).
     * @return \Lolzteam\Generated\Market\Models\CategorySupercellResponse
     */
    public function supercell(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        int|null $daybreak = null,
        array|null $emailType = null,
        string|null $itemDomain = null,
        int|null $eg = null,
        string|null $tel = null,
        int|null $brawlLevelMin = null,
        int|null $brawlLevelMax = null,
        int|null $brawlCupMin = null,
        int|null $brawlCupMax = null,
        int|null $brawlWinsMin = null,
        int|null $brawlWinsMax = null,
        string|null $brawlPass = null,
        array|null $brawler = null,
        int|null $brawlersMin = null,
        int|null $brawlersMax = null,
        int|null $legendaryBrawlersMin = null,
        int|null $legendaryBrawlersMax = null,
        int|null $royaleLevelMin = null,
        int|null $royaleLevelMax = null,
        int|null $royaleCupMin = null,
        int|null $royaleCupMax = null,
        int|null $royaleWinsMin = null,
        int|null $royaleWinsMax = null,
        int|null $kingLevelMin = null,
        int|null $kingLevelMax = null,
        string|null $royalePass = null,
        int|null $clashLevelMin = null,
        int|null $clashLevelMax = null,
        int|null $clashCupMin = null,
        int|null $clashCupMax = null,
        int|null $clashWinsMin = null,
        int|null $clashWinsMax = null,
        string|null $clashPass = null,
        int|null $totalHeroesLevelMin = null,
        int|null $totalHeroesLevelMax = null,
        int|null $totalTroopsLevelMin = null,
        int|null $totalTroopsLevelMax = null,
        int|null $totalSpellsLevelMin = null,
        int|null $totalSpellsLevelMax = null,
        int|null $totalBuilderHeroesLevelMin = null,
        int|null $totalBuilderHeroesLevelMax = null,
        int|null $totalBuilderTroopsLevelMin = null,
        int|null $totalBuilderTroopsLevelMax = null,
        int|null $townHallLevelMin = null,
        int|null $townHallLevelMax = null,
        int|null $builderHallLevelMin = null,
        int|null $builderHallLevelMax = null,
        int|null $builderHallCupMin = null,
        int|null $builderHallCupMax = null,
        int|null $creationYearMin = null,
        int|null $creationYearMax = null,
    ): \Lolzteam\Generated\Market\Models\CategorySupercellResponse {
        $path = '/supercell';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($daybreak !== null) {
            $params['daybreak'] = $daybreak;
        }
        if ($emailType !== null) {
            $params['email_type[]'] = $emailType;
        }
        if ($itemDomain !== null) {
            $params['item_domain'] = $itemDomain;
        }
        if ($eg !== null) {
            $params['eg'] = $eg;
        }
        if ($tel !== null) {
            $params['tel'] = $tel;
        }
        if ($brawlLevelMin !== null) {
            $params['brawl_level_min'] = $brawlLevelMin;
        }
        if ($brawlLevelMax !== null) {
            $params['brawl_level_max'] = $brawlLevelMax;
        }
        if ($brawlCupMin !== null) {
            $params['brawl_cup_min'] = $brawlCupMin;
        }
        if ($brawlCupMax !== null) {
            $params['brawl_cup_max'] = $brawlCupMax;
        }
        if ($brawlWinsMin !== null) {
            $params['brawl_wins_min'] = $brawlWinsMin;
        }
        if ($brawlWinsMax !== null) {
            $params['brawl_wins_max'] = $brawlWinsMax;
        }
        if ($brawlPass !== null) {
            $params['brawl_pass'] = $brawlPass;
        }
        if ($brawler !== null) {
            $params['brawler[]'] = $brawler;
        }
        if ($brawlersMin !== null) {
            $params['brawlers_min'] = $brawlersMin;
        }
        if ($brawlersMax !== null) {
            $params['brawlers_max'] = $brawlersMax;
        }
        if ($legendaryBrawlersMin !== null) {
            $params['legendary_brawlers_min'] = $legendaryBrawlersMin;
        }
        if ($legendaryBrawlersMax !== null) {
            $params['legendary_brawlers_max'] = $legendaryBrawlersMax;
        }
        if ($royaleLevelMin !== null) {
            $params['royale_level_min'] = $royaleLevelMin;
        }
        if ($royaleLevelMax !== null) {
            $params['royale_level_max'] = $royaleLevelMax;
        }
        if ($royaleCupMin !== null) {
            $params['royale_cup_min'] = $royaleCupMin;
        }
        if ($royaleCupMax !== null) {
            $params['royale_cup_max'] = $royaleCupMax;
        }
        if ($royaleWinsMin !== null) {
            $params['royale_wins_min'] = $royaleWinsMin;
        }
        if ($royaleWinsMax !== null) {
            $params['royale_wins_max'] = $royaleWinsMax;
        }
        if ($kingLevelMin !== null) {
            $params['king_level_min'] = $kingLevelMin;
        }
        if ($kingLevelMax !== null) {
            $params['king_level_max'] = $kingLevelMax;
        }
        if ($royalePass !== null) {
            $params['royale_pass'] = $royalePass;
        }
        if ($clashLevelMin !== null) {
            $params['clash_level_min'] = $clashLevelMin;
        }
        if ($clashLevelMax !== null) {
            $params['clash_level_max'] = $clashLevelMax;
        }
        if ($clashCupMin !== null) {
            $params['clash_cup_min'] = $clashCupMin;
        }
        if ($clashCupMax !== null) {
            $params['clash_cup_max'] = $clashCupMax;
        }
        if ($clashWinsMin !== null) {
            $params['clash_wins_min'] = $clashWinsMin;
        }
        if ($clashWinsMax !== null) {
            $params['clash_wins_max'] = $clashWinsMax;
        }
        if ($clashPass !== null) {
            $params['clash_pass'] = $clashPass;
        }
        if ($totalHeroesLevelMin !== null) {
            $params['total_heroes_level_min'] = $totalHeroesLevelMin;
        }
        if ($totalHeroesLevelMax !== null) {
            $params['total_heroes_level_max'] = $totalHeroesLevelMax;
        }
        if ($totalTroopsLevelMin !== null) {
            $params['total_troops_level_min'] = $totalTroopsLevelMin;
        }
        if ($totalTroopsLevelMax !== null) {
            $params['total_troops_level_max'] = $totalTroopsLevelMax;
        }
        if ($totalSpellsLevelMin !== null) {
            $params['total_spells_level_min'] = $totalSpellsLevelMin;
        }
        if ($totalSpellsLevelMax !== null) {
            $params['total_spells_level_max'] = $totalSpellsLevelMax;
        }
        if ($totalBuilderHeroesLevelMin !== null) {
            $params['total_builder_heroes_level_min'] = $totalBuilderHeroesLevelMin;
        }
        if ($totalBuilderHeroesLevelMax !== null) {
            $params['total_builder_heroes_level_max'] = $totalBuilderHeroesLevelMax;
        }
        if ($totalBuilderTroopsLevelMin !== null) {
            $params['total_builder_troops_level_min'] = $totalBuilderTroopsLevelMin;
        }
        if ($totalBuilderTroopsLevelMax !== null) {
            $params['total_builder_troops_level_max'] = $totalBuilderTroopsLevelMax;
        }
        if ($townHallLevelMin !== null) {
            $params['town_hall_level_min'] = $townHallLevelMin;
        }
        if ($townHallLevelMax !== null) {
            $params['town_hall_level_max'] = $townHallLevelMax;
        }
        if ($builderHallLevelMin !== null) {
            $params['builder_hall_level_min'] = $builderHallLevelMin;
        }
        if ($builderHallLevelMax !== null) {
            $params['builder_hall_level_max'] = $builderHallLevelMax;
        }
        if ($builderHallCupMin !== null) {
            $params['builder_hall_cup_min'] = $builderHallCupMin;
        }
        if ($builderHallCupMax !== null) {
            $params['builder_hall_cup_max'] = $builderHallCupMax;
        }
        if ($creationYearMin !== null) {
            $params['creation_year_min'] = $creationYearMin;
        }
        if ($creationYearMax !== null) {
            $params['creation_year_max'] = $creationYearMax;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategorySupercellResponse::fromArray($response);
    }

    /**
     * EA (Origin)
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /ea
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param array|null $emailType Email type.
     * @param string|null $itemDomain Domain of native/autoreg email.
     * @param array|null $game List of games.
     * @param array|null $country List of allowed countries.
     * @param array|null $notCountry List of disallowed countries.
     * @param int|null $gmin Minimum count of games.
     * @param int|null $gmax Maximum count of games.
     * @param int|null $alRankMin Minimum rank points in Apex Legends.
     * @param int|null $alRankMax Maximum rank points in Apex Legends.
     * @param int|null $alLevelMin Minimum level in Apex Legends.
     * @param int|null $alLevelMax Maximum level in Apex Legends.
     * @param string|null $hasBan Has a ban in any game.
     * @param string|null $xboxConnected Xbox connected to account.
     * @param string|null $steamConnected Steam connected to account.
     * @param string|null $psnConnected PSN connected to account.
     * @param string|null $subscription Name of subscription.
     * @param int|null $subscriptionLength Length of subscription.
     * @param string|null $subscriptionPeriod In what notation is time measured.
     * @param array|null $hoursPlayed List of minimum hours played by game.
     * @param array|null $hoursPlayedMax List of maximum hours played by game.
     * @param string|null $transactions Has transactions.
     * @return \Lolzteam\Generated\Market\Models\CategoryEAResponse
     */
    public function eA(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        array|null $emailType = null,
        string|null $itemDomain = null,
        array|null $game = null,
        array|null $country = null,
        array|null $notCountry = null,
        int|null $gmin = null,
        int|null $gmax = null,
        int|null $alRankMin = null,
        int|null $alRankMax = null,
        int|null $alLevelMin = null,
        int|null $alLevelMax = null,
        string|null $hasBan = null,
        string|null $xboxConnected = null,
        string|null $steamConnected = null,
        string|null $psnConnected = null,
        string|null $subscription = null,
        int|null $subscriptionLength = null,
        string|null $subscriptionPeriod = null,
        array|null $hoursPlayed = null,
        array|null $hoursPlayedMax = null,
        string|null $transactions = null,
    ): \Lolzteam\Generated\Market\Models\CategoryEAResponse {
        $path = '/ea';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($emailType !== null) {
            $params['email_type[]'] = $emailType;
        }
        if ($itemDomain !== null) {
            $params['item_domain'] = $itemDomain;
        }
        if ($game !== null) {
            $params['game[]'] = $game;
        }
        if ($country !== null) {
            $params['country[]'] = $country;
        }
        if ($notCountry !== null) {
            $params['not_country[]'] = $notCountry;
        }
        if ($gmin !== null) {
            $params['gmin'] = $gmin;
        }
        if ($gmax !== null) {
            $params['gmax'] = $gmax;
        }
        if ($alRankMin !== null) {
            $params['al_rank_min'] = $alRankMin;
        }
        if ($alRankMax !== null) {
            $params['al_rank_max'] = $alRankMax;
        }
        if ($alLevelMin !== null) {
            $params['al_level_min'] = $alLevelMin;
        }
        if ($alLevelMax !== null) {
            $params['al_level_max'] = $alLevelMax;
        }
        if ($hasBan !== null) {
            $params['has_ban'] = $hasBan;
        }
        if ($xboxConnected !== null) {
            $params['xbox_connected'] = $xboxConnected;
        }
        if ($steamConnected !== null) {
            $params['steam_connected'] = $steamConnected;
        }
        if ($psnConnected !== null) {
            $params['psn_connected'] = $psnConnected;
        }
        if ($subscription !== null) {
            $params['subscription'] = $subscription;
        }
        if ($subscriptionLength !== null) {
            $params['subscription_length'] = $subscriptionLength;
        }
        if ($subscriptionPeriod !== null) {
            $params['subscription_period'] = $subscriptionPeriod;
        }
        if ($hoursPlayed !== null) {
            foreach ($hoursPlayed as $k => $v) {
                $params['hours_played[' . $k . ']'] = $v;
            }
        }
        if ($hoursPlayedMax !== null) {
            foreach ($hoursPlayedMax as $k => $v) {
                $params['hours_played_max[' . $k . ']'] = $v;
            }
        }
        if ($transactions !== null) {
            $params['transactions'] = $transactions;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryEAResponse::fromArray($response);
    }

    /**
     * World of Tanks
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /world-of-tanks
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param array|null $emailType Email type.
     * @param string|null $itemDomain Domain of native/autoreg email.
     * @param string|null $tel Has linked mobile.
     * @param int|null $daybreak Number of days the account has been offline.
     * @param int|null $battlesMin Minimum number of battles.
     * @param int|null $battlesMax Maximum number of battles.
     * @param int|null $goldMin Minimum number of gold.
     * @param int|null $goldMax Maximum number of gold.
     * @param int|null $silverMin Minimum number of silver.
     * @param int|null $silverMax Maximum number of silver.
     * @param int|null $topMin Minimum number of top tanks.
     * @param int|null $topMax Maximum number of top tanks.
     * @param int|null $premMin Minimum number of premium tanks.
     * @param int|null $premMax Maximum number of premium tanks.
     * @param int|null $topPremMin Minimum number of top premium tanks.
     * @param int|null $topPremMax Maximum number of top premium tanks.
     * @param int|null $winPmin Minimum number of wins.
     * @param int|null $winPmax Maximum number of wins.
     * @param array|null $tank List of tanks.
     * @param array|null $region Region.
     * @param array|null $notRegion Exclude region.
     * @param string|null $premium Has a premium subscription.
     * @param int|null $premiumExpiration When premium subscription will be active
     * @param string|null $premiumExpirationPeriod In what notation is time measured
     * @param string|null $clan Has clan.
     * @param array|null $clanRole List of allowed clan role.
     * @param array|null $notClanRole List of disallowed clan role.
     * @param int|null $clanGoldMin Minimum number of gold in clan treasure.
     * @param int|null $clanGoldMax Maximum number of gold in clan treasure.
     * @param int|null $clanCreditsMin Minimum number of credits in clan treasure.
     * @param int|null $clanCreditsMax Maximum number of credits in clan treasure.
     * @param int|null $clanCrystalMin Minimum number of crystal in clan treasure.
     * @param int|null $clanCrystalMax Maximum number of crystal in clan treasure.
     * @param array|null $country List of allowed countries.
     * @param array|null $notCountry List of disallowed countries.
     * @return \Lolzteam\Generated\Market\Models\CategoryWotResponse
     */
    public function wot(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        array|null $emailType = null,
        string|null $itemDomain = null,
        string|null $tel = null,
        int|null $daybreak = null,
        int|null $battlesMin = null,
        int|null $battlesMax = null,
        int|null $goldMin = null,
        int|null $goldMax = null,
        int|null $silverMin = null,
        int|null $silverMax = null,
        int|null $topMin = null,
        int|null $topMax = null,
        int|null $premMin = null,
        int|null $premMax = null,
        int|null $topPremMin = null,
        int|null $topPremMax = null,
        int|null $winPmin = null,
        int|null $winPmax = null,
        array|null $tank = null,
        array|null $region = null,
        array|null $notRegion = null,
        string|null $premium = null,
        int|null $premiumExpiration = null,
        string|null $premiumExpirationPeriod = null,
        string|null $clan = null,
        array|null $clanRole = null,
        array|null $notClanRole = null,
        int|null $clanGoldMin = null,
        int|null $clanGoldMax = null,
        int|null $clanCreditsMin = null,
        int|null $clanCreditsMax = null,
        int|null $clanCrystalMin = null,
        int|null $clanCrystalMax = null,
        array|null $country = null,
        array|null $notCountry = null,
    ): \Lolzteam\Generated\Market\Models\CategoryWotResponse {
        $path = '/world-of-tanks';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($emailType !== null) {
            $params['email_type[]'] = $emailType;
        }
        if ($itemDomain !== null) {
            $params['item_domain'] = $itemDomain;
        }
        if ($tel !== null) {
            $params['tel'] = $tel;
        }
        if ($daybreak !== null) {
            $params['daybreak'] = $daybreak;
        }
        if ($battlesMin !== null) {
            $params['battles_min'] = $battlesMin;
        }
        if ($battlesMax !== null) {
            $params['battles_max'] = $battlesMax;
        }
        if ($goldMin !== null) {
            $params['gold_min'] = $goldMin;
        }
        if ($goldMax !== null) {
            $params['gold_max'] = $goldMax;
        }
        if ($silverMin !== null) {
            $params['silver_min'] = $silverMin;
        }
        if ($silverMax !== null) {
            $params['silver_max'] = $silverMax;
        }
        if ($topMin !== null) {
            $params['top_min'] = $topMin;
        }
        if ($topMax !== null) {
            $params['top_max'] = $topMax;
        }
        if ($premMin !== null) {
            $params['prem_min'] = $premMin;
        }
        if ($premMax !== null) {
            $params['prem_max'] = $premMax;
        }
        if ($topPremMin !== null) {
            $params['top_prem_min'] = $topPremMin;
        }
        if ($topPremMax !== null) {
            $params['top_prem_max'] = $topPremMax;
        }
        if ($winPmin !== null) {
            $params['win_pmin'] = $winPmin;
        }
        if ($winPmax !== null) {
            $params['win_pmax'] = $winPmax;
        }
        if ($tank !== null) {
            $params['tank[]'] = $tank;
        }
        if ($region !== null) {
            $params['region[]'] = $region;
        }
        if ($notRegion !== null) {
            $params['not_region[]'] = $notRegion;
        }
        if ($premium !== null) {
            $params['premium'] = $premium;
        }
        if ($premiumExpiration !== null) {
            $params['premium_expiration'] = $premiumExpiration;
        }
        if ($premiumExpirationPeriod !== null) {
            $params['premium_expiration_period'] = $premiumExpirationPeriod;
        }
        if ($clan !== null) {
            $params['clan'] = $clan;
        }
        if ($clanRole !== null) {
            $params['clan_role[]'] = $clanRole;
        }
        if ($notClanRole !== null) {
            $params['not_clan_role[]'] = $notClanRole;
        }
        if ($clanGoldMin !== null) {
            $params['clan_gold_min'] = $clanGoldMin;
        }
        if ($clanGoldMax !== null) {
            $params['clan_gold_max'] = $clanGoldMax;
        }
        if ($clanCreditsMin !== null) {
            $params['clan_credits_min'] = $clanCreditsMin;
        }
        if ($clanCreditsMax !== null) {
            $params['clan_credits_max'] = $clanCreditsMax;
        }
        if ($clanCrystalMin !== null) {
            $params['clan_crystal_min'] = $clanCrystalMin;
        }
        if ($clanCrystalMax !== null) {
            $params['clan_crystal_max'] = $clanCrystalMax;
        }
        if ($country !== null) {
            $params['country[]'] = $country;
        }
        if ($notCountry !== null) {
            $params['not_country[]'] = $notCountry;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryWotResponse::fromArray($response);
    }

    /**
     * WoT Blitz
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /wot-blitz
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param array|null $emailType Email type.
     * @param string|null $itemDomain Domain of native/autoreg email.
     * @param string|null $tel Has linked mobile.
     * @param int|null $daybreak Number of days the account has been offline.
     * @param int|null $battlesMin Minimum number of battles.
     * @param int|null $battlesMax Maximum number of battles.
     * @param int|null $goldMin Minimum number of gold.
     * @param int|null $goldMax Maximum number of gold.
     * @param int|null $silverMin Minimum number of silver.
     * @param int|null $silverMax Maximum number of silver.
     * @param int|null $topMin Minimum number of top tanks.
     * @param int|null $topMax Maximum number of top tanks.
     * @param int|null $premMin Minimum number of premium tanks.
     * @param int|null $premMax Maximum number of premium tanks.
     * @param int|null $topPremMin Minimum number of top premium tanks.
     * @param int|null $topPremMax Maximum number of top premium tanks.
     * @param int|null $winPmin Minimum number of wins.
     * @param int|null $winPmax Maximum number of wins.
     * @param array|null $tank List of tanks.
     * @param array|null $region Region.
     * @param array|null $notRegion Exclude region.
     * @param string|null $premium Has a premium subscription.
     * @param int|null $premiumExpiration When premium subscription will be active
     * @param string|null $premiumExpirationPeriod In what notation is time measured
     * @param string|null $clan Has clan.
     * @param array|null $clanRole List of allowed clan role.
     * @param array|null $notClanRole List of disallowed clan role.
     * @param int|null $clanGoldMin Minimum number of gold in clan treasure.
     * @param int|null $clanGoldMax Maximum number of gold in clan treasure.
     * @param int|null $clanCreditsMin Minimum number of credits in clan treasure.
     * @param int|null $clanCreditsMax Maximum number of credits in clan treasure.
     * @param int|null $clanCrystalMin Minimum number of crystal in clan treasure.
     * @param int|null $clanCrystalMax Maximum number of crystal in clan treasure.
     * @param array|null $country List of allowed countries.
     * @param array|null $notCountry List of disallowed countries.
     * @return \Lolzteam\Generated\Market\Models\CategoryWotBlitzResponse
     */
    public function wotBlitz(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        array|null $emailType = null,
        string|null $itemDomain = null,
        string|null $tel = null,
        int|null $daybreak = null,
        int|null $battlesMin = null,
        int|null $battlesMax = null,
        int|null $goldMin = null,
        int|null $goldMax = null,
        int|null $silverMin = null,
        int|null $silverMax = null,
        int|null $topMin = null,
        int|null $topMax = null,
        int|null $premMin = null,
        int|null $premMax = null,
        int|null $topPremMin = null,
        int|null $topPremMax = null,
        int|null $winPmin = null,
        int|null $winPmax = null,
        array|null $tank = null,
        array|null $region = null,
        array|null $notRegion = null,
        string|null $premium = null,
        int|null $premiumExpiration = null,
        string|null $premiumExpirationPeriod = null,
        string|null $clan = null,
        array|null $clanRole = null,
        array|null $notClanRole = null,
        int|null $clanGoldMin = null,
        int|null $clanGoldMax = null,
        int|null $clanCreditsMin = null,
        int|null $clanCreditsMax = null,
        int|null $clanCrystalMin = null,
        int|null $clanCrystalMax = null,
        array|null $country = null,
        array|null $notCountry = null,
    ): \Lolzteam\Generated\Market\Models\CategoryWotBlitzResponse {
        $path = '/wot-blitz';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($emailType !== null) {
            $params['email_type[]'] = $emailType;
        }
        if ($itemDomain !== null) {
            $params['item_domain'] = $itemDomain;
        }
        if ($tel !== null) {
            $params['tel'] = $tel;
        }
        if ($daybreak !== null) {
            $params['daybreak'] = $daybreak;
        }
        if ($battlesMin !== null) {
            $params['battles_min'] = $battlesMin;
        }
        if ($battlesMax !== null) {
            $params['battles_max'] = $battlesMax;
        }
        if ($goldMin !== null) {
            $params['gold_min'] = $goldMin;
        }
        if ($goldMax !== null) {
            $params['gold_max'] = $goldMax;
        }
        if ($silverMin !== null) {
            $params['silver_min'] = $silverMin;
        }
        if ($silverMax !== null) {
            $params['silver_max'] = $silverMax;
        }
        if ($topMin !== null) {
            $params['top_min'] = $topMin;
        }
        if ($topMax !== null) {
            $params['top_max'] = $topMax;
        }
        if ($premMin !== null) {
            $params['prem_min'] = $premMin;
        }
        if ($premMax !== null) {
            $params['prem_max'] = $premMax;
        }
        if ($topPremMin !== null) {
            $params['top_prem_min'] = $topPremMin;
        }
        if ($topPremMax !== null) {
            $params['top_prem_max'] = $topPremMax;
        }
        if ($winPmin !== null) {
            $params['win_pmin'] = $winPmin;
        }
        if ($winPmax !== null) {
            $params['win_pmax'] = $winPmax;
        }
        if ($tank !== null) {
            $params['tank[]'] = $tank;
        }
        if ($region !== null) {
            $params['region[]'] = $region;
        }
        if ($notRegion !== null) {
            $params['not_region[]'] = $notRegion;
        }
        if ($premium !== null) {
            $params['premium'] = $premium;
        }
        if ($premiumExpiration !== null) {
            $params['premium_expiration'] = $premiumExpiration;
        }
        if ($premiumExpirationPeriod !== null) {
            $params['premium_expiration_period'] = $premiumExpirationPeriod;
        }
        if ($clan !== null) {
            $params['clan'] = $clan;
        }
        if ($clanRole !== null) {
            $params['clan_role[]'] = $clanRole;
        }
        if ($notClanRole !== null) {
            $params['not_clan_role[]'] = $notClanRole;
        }
        if ($clanGoldMin !== null) {
            $params['clan_gold_min'] = $clanGoldMin;
        }
        if ($clanGoldMax !== null) {
            $params['clan_gold_max'] = $clanGoldMax;
        }
        if ($clanCreditsMin !== null) {
            $params['clan_credits_min'] = $clanCreditsMin;
        }
        if ($clanCreditsMax !== null) {
            $params['clan_credits_max'] = $clanCreditsMax;
        }
        if ($clanCrystalMin !== null) {
            $params['clan_crystal_min'] = $clanCrystalMin;
        }
        if ($clanCrystalMax !== null) {
            $params['clan_crystal_max'] = $clanCrystalMax;
        }
        if ($country !== null) {
            $params['country[]'] = $country;
        }
        if ($notCountry !== null) {
            $params['not_country[]'] = $notCountry;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryWotBlitzResponse::fromArray($response);
    }

    /**
     * Gifts
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /gifts
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param string|null $subscription Name of subscription.
     * @param int|null $subscriptionLength Length of subscription.
     * @param string|null $subscriptionPeriod In what notation is time measured.
     * @return \Lolzteam\Generated\Market\Models\CategoryGiftsResponse
     */
    public function gifts(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        string|null $subscription = null,
        int|null $subscriptionLength = null,
        string|null $subscriptionPeriod = null,
    ): \Lolzteam\Generated\Market\Models\CategoryGiftsResponse {
        $path = '/gifts';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($subscription !== null) {
            $params['subscription'] = $subscription;
        }
        if ($subscriptionLength !== null) {
            $params['subscription_length'] = $subscriptionLength;
        }
        if ($subscriptionPeriod !== null) {
            $params['subscription_period'] = $subscriptionPeriod;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryGiftsResponse::fromArray($response);
    }

    /**
     * Epic Games
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /epicgames
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param array|null $emailType Email type.
     * @param string|null $itemDomain Domain of native/autoreg email.
     * @param int|null $eg Guarantee type.
     * @param array|null $game List of games.
     * @param string|null $changeEmail Can change email.
     * @param bool|null $rlPurchases Has Rocket League purchases.
     * @param float|null $balanceMin Minimum epic wallet balance.
     * @param float|null $balanceMax Maximum epic wallet balance.
     * @param float|null $rewardsBalanceMin Minimum rewards balance.
     * @param float|null $rewardsBalanceMax Maximum rewards balance.
     * @param int|null $gmin Minimum number of games.
     * @param int|null $gmax Maximum number of games.
     * @param array|null $country List of allowed countries.
     * @param array|null $notCountry List of disallowed countries.
     * @param int|null $daybreak Number of days the account has been offline.
     * @param array|null $hoursPlayed List of minimum hours played by game.
     * @param array|null $hoursPlayedMax List of maximum hours played by game.
     * @return \Lolzteam\Generated\Market\Models\CategoryEpicGamesResponse
     */
    public function epicGames(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        array|null $emailType = null,
        string|null $itemDomain = null,
        int|null $eg = null,
        array|null $game = null,
        string|null $changeEmail = null,
        bool|null $rlPurchases = null,
        float|null $balanceMin = null,
        float|null $balanceMax = null,
        float|null $rewardsBalanceMin = null,
        float|null $rewardsBalanceMax = null,
        int|null $gmin = null,
        int|null $gmax = null,
        array|null $country = null,
        array|null $notCountry = null,
        int|null $daybreak = null,
        array|null $hoursPlayed = null,
        array|null $hoursPlayedMax = null,
    ): \Lolzteam\Generated\Market\Models\CategoryEpicGamesResponse {
        $path = '/epicgames';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($emailType !== null) {
            $params['email_type[]'] = $emailType;
        }
        if ($itemDomain !== null) {
            $params['item_domain'] = $itemDomain;
        }
        if ($eg !== null) {
            $params['eg'] = $eg;
        }
        if ($game !== null) {
            $params['game[]'] = $game;
        }
        if ($changeEmail !== null) {
            $params['change_email'] = $changeEmail;
        }
        if ($rlPurchases !== null) {
            $params['rl_purchases'] = $rlPurchases;
        }
        if ($balanceMin !== null) {
            $params['balance_min'] = $balanceMin;
        }
        if ($balanceMax !== null) {
            $params['balance_max'] = $balanceMax;
        }
        if ($rewardsBalanceMin !== null) {
            $params['rewards_balance_min'] = $rewardsBalanceMin;
        }
        if ($rewardsBalanceMax !== null) {
            $params['rewards_balance_max'] = $rewardsBalanceMax;
        }
        if ($gmin !== null) {
            $params['gmin'] = $gmin;
        }
        if ($gmax !== null) {
            $params['gmax'] = $gmax;
        }
        if ($country !== null) {
            $params['country[]'] = $country;
        }
        if ($notCountry !== null) {
            $params['not_country[]'] = $notCountry;
        }
        if ($daybreak !== null) {
            $params['daybreak'] = $daybreak;
        }
        if ($hoursPlayed !== null) {
            foreach ($hoursPlayed as $k => $v) {
                $params['hours_played[' . $k . ']'] = $v;
            }
        }
        if ($hoursPlayedMax !== null) {
            foreach ($hoursPlayedMax as $k => $v) {
                $params['hours_played_max[' . $k . ']'] = $v;
            }
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryEpicGamesResponse::fromArray($response);
    }

    /**
     * Escape from Tarkov
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /escape-from-tarkov
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param array|null $emailType Email type.
     * @param string|null $itemDomain Domain of native/autoreg email.
     * @param string|null $region Region.
     * @param array|null $version List of versions.
     * @param int|null $reg How old is the account.
     * @param string|null $regPeriod In what notation is time measured.
     * @param int|null $levelMin Minimum level.
     * @param int|null $levelMax Maximum level.
     * @param string|null $pve Access to pve.
     * @param string|null $side Side in current wipe.
     * @return \Lolzteam\Generated\Market\Models\CategoryEscapeFromTarkovResponse
     */
    public function escapeFromTarkov(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        array|null $emailType = null,
        string|null $itemDomain = null,
        string|null $region = null,
        array|null $version = null,
        int|null $reg = null,
        string|null $regPeriod = null,
        int|null $levelMin = null,
        int|null $levelMax = null,
        string|null $pve = null,
        string|null $side = null,
    ): \Lolzteam\Generated\Market\Models\CategoryEscapeFromTarkovResponse {
        $path = '/escape-from-tarkov';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($emailType !== null) {
            $params['email_type[]'] = $emailType;
        }
        if ($itemDomain !== null) {
            $params['item_domain'] = $itemDomain;
        }
        if ($region !== null) {
            $params['region'] = $region;
        }
        if ($version !== null) {
            $params['version[]'] = $version;
        }
        if ($reg !== null) {
            $params['reg'] = $reg;
        }
        if ($regPeriod !== null) {
            $params['reg_period'] = $regPeriod;
        }
        if ($levelMin !== null) {
            $params['level_min'] = $levelMin;
        }
        if ($levelMax !== null) {
            $params['level_max'] = $levelMax;
        }
        if ($pve !== null) {
            $params['pve'] = $pve;
        }
        if ($side !== null) {
            $params['side'] = $side;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryEscapeFromTarkovResponse::fromArray($response);
    }

    /**
     * Social Club
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /socialclub
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param int|null $daybreak Number of days the account has been offline.
     * @param int|null $levelMin Minimum number of Social Club level.
     * @param int|null $levelMax Maximum number of Social Club level.
     * @param int|null $cashMin Minimum number of GTA V cash
     * @param int|null $cashMax Maximum number of GTA V cash
     * @param int|null $bankCashMin Minimum number of GTA V bank cash
     * @param int|null $bankCashMax Maximum number of GTA V bank cash
     * @param array|null $game List of games.
     * @return \Lolzteam\Generated\Market\Models\CategorySocialClubResponse
     */
    public function socialClub(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        int|null $daybreak = null,
        int|null $levelMin = null,
        int|null $levelMax = null,
        int|null $cashMin = null,
        int|null $cashMax = null,
        int|null $bankCashMin = null,
        int|null $bankCashMax = null,
        array|null $game = null,
    ): \Lolzteam\Generated\Market\Models\CategorySocialClubResponse {
        $path = '/socialclub';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($daybreak !== null) {
            $params['daybreak'] = $daybreak;
        }
        if ($levelMin !== null) {
            $params['level_min'] = $levelMin;
        }
        if ($levelMax !== null) {
            $params['level_max'] = $levelMax;
        }
        if ($cashMin !== null) {
            $params['cash_min'] = $cashMin;
        }
        if ($cashMax !== null) {
            $params['cash_max'] = $cashMax;
        }
        if ($bankCashMin !== null) {
            $params['bank_cash_min'] = $bankCashMin;
        }
        if ($bankCashMax !== null) {
            $params['bank_cash_max'] = $bankCashMax;
        }
        if ($game !== null) {
            $params['game[]'] = $game;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategorySocialClubResponse::fromArray($response);
    }

    /**
     * Uplay
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /uplay
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param array|null $emailType Email type.
     * @param string|null $itemDomain Domain of native/autoreg email.
     * @param array|null $game List of games.
     * @param array|null $country List of allowed countries.
     * @param array|null $notCountry List of disallowed countries.
     * @param int|null $daybreak Number of days the account has been offline.
     * @param int|null $gmin Minimum count of games.
     * @param int|null $gmax Maximum count of games.
     * @param string|null $subscription Name of subscription.
     * @param int|null $subscriptionLength Length of subscription.
     * @param string|null $subscriptionPeriod In what notation is time measured.
     * @param int|null $r6LevelMin Minimum level in Tom Clancy's Rainbow Six Siege.
     * @param int|null $r6LevelMax Maximum level in Tom Clancy's Rainbow Six Siege.
     * @param int|null $r6RankMin Minimum rank points in Tom Clancy's Rainbow Six Siege.
     * @param int|null $r6RankMax Maximum rank points in Tom Clancy's Rainbow Six Siege.
     * @param int|null $r6OperatorsMin Minimum count of operators in Tom Clancy's Rainbow Six Siege.
     * @param int|null $r6OperatorsMax Maximum count of operators in Tom Clancy's Rainbow Six Siege.
     * @param string|null $r6Ban Is account banned in Tom Clancy's Rainbow Six Siege
     * @param int|null $r6Smin Minimum number of skins in Tom Clancy's Rainbow Six Siege.
     * @param int|null $r6Smax Maximum number of skins in Tom Clancy's Rainbow Six Siege.
     * @param array|null $r6Skin List of weapon skins in Tom Clancy's Rainbow Six Siege.
     * @param array|null $r6Operator List of operators in Tom Clancy's Rainbow Six Siege.
     * @param string|null $xboxConnected Xbox connected to account.
     * @param string|null $psnConnected PSN connected to account.
     * @param string|null $steamConnected Steam connected to account.
     * @param float|null $balanceMin Minimum balance.
     * @param float|null $balanceMax Maximum balance.
     * @param string|null $transactions Has transactions.
     * @param int|null $reg How old is the account.
     * @param string|null $regPeriod In what notation is time measured.
     * @return \Lolzteam\Generated\Market\Models\CategoryUplayResponse
     */
    public function uplay(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        array|null $emailType = null,
        string|null $itemDomain = null,
        array|null $game = null,
        array|null $country = null,
        array|null $notCountry = null,
        int|null $daybreak = null,
        int|null $gmin = null,
        int|null $gmax = null,
        string|null $subscription = null,
        int|null $subscriptionLength = null,
        string|null $subscriptionPeriod = null,
        int|null $r6LevelMin = null,
        int|null $r6LevelMax = null,
        int|null $r6RankMin = null,
        int|null $r6RankMax = null,
        int|null $r6OperatorsMin = null,
        int|null $r6OperatorsMax = null,
        string|null $r6Ban = null,
        int|null $r6Smin = null,
        int|null $r6Smax = null,
        array|null $r6Skin = null,
        array|null $r6Operator = null,
        string|null $xboxConnected = null,
        string|null $psnConnected = null,
        string|null $steamConnected = null,
        float|null $balanceMin = null,
        float|null $balanceMax = null,
        string|null $transactions = null,
        int|null $reg = null,
        string|null $regPeriod = null,
    ): \Lolzteam\Generated\Market\Models\CategoryUplayResponse {
        $path = '/uplay';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($emailType !== null) {
            $params['email_type[]'] = $emailType;
        }
        if ($itemDomain !== null) {
            $params['item_domain'] = $itemDomain;
        }
        if ($game !== null) {
            $params['game[]'] = $game;
        }
        if ($country !== null) {
            $params['country[]'] = $country;
        }
        if ($notCountry !== null) {
            $params['not_country[]'] = $notCountry;
        }
        if ($daybreak !== null) {
            $params['daybreak'] = $daybreak;
        }
        if ($gmin !== null) {
            $params['gmin'] = $gmin;
        }
        if ($gmax !== null) {
            $params['gmax'] = $gmax;
        }
        if ($subscription !== null) {
            $params['subscription'] = $subscription;
        }
        if ($subscriptionLength !== null) {
            $params['subscription_length'] = $subscriptionLength;
        }
        if ($subscriptionPeriod !== null) {
            $params['subscription_period'] = $subscriptionPeriod;
        }
        if ($r6LevelMin !== null) {
            $params['r6_level_min'] = $r6LevelMin;
        }
        if ($r6LevelMax !== null) {
            $params['r6_level_max'] = $r6LevelMax;
        }
        if ($r6RankMin !== null) {
            $params['r6_rank_min'] = $r6RankMin;
        }
        if ($r6RankMax !== null) {
            $params['r6_rank_max'] = $r6RankMax;
        }
        if ($r6OperatorsMin !== null) {
            $params['r6_operators_min'] = $r6OperatorsMin;
        }
        if ($r6OperatorsMax !== null) {
            $params['r6_operators_max'] = $r6OperatorsMax;
        }
        if ($r6Ban !== null) {
            $params['r6_ban'] = $r6Ban;
        }
        if ($r6Smin !== null) {
            $params['r6_smin'] = $r6Smin;
        }
        if ($r6Smax !== null) {
            $params['r6_smax'] = $r6Smax;
        }
        if ($r6Skin !== null) {
            $params['r6_skin[]'] = $r6Skin;
        }
        if ($r6Operator !== null) {
            $params['r6_operator[]'] = $r6Operator;
        }
        if ($xboxConnected !== null) {
            $params['xbox_connected'] = $xboxConnected;
        }
        if ($psnConnected !== null) {
            $params['psn_connected'] = $psnConnected;
        }
        if ($steamConnected !== null) {
            $params['steam_connected'] = $steamConnected;
        }
        if ($balanceMin !== null) {
            $params['balance_min'] = $balanceMin;
        }
        if ($balanceMax !== null) {
            $params['balance_max'] = $balanceMax;
        }
        if ($transactions !== null) {
            $params['transactions'] = $transactions;
        }
        if ($reg !== null) {
            $params['reg'] = $reg;
        }
        if ($regPeriod !== null) {
            $params['reg_period'] = $regPeriod;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryUplayResponse::fromArray($response);
    }

    /**
     * Discord
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /discord
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param array|null $emailType Email type.
     * @param string|null $itemDomain Domain of native/autoreg email.
     * @param string|null $tel Has linked mobile.
     * @param string|null $nitro Has nitro.
     * @param array|null $nitroType Nitro type.
     * @param int|null $nitroLength Length of nitro.
     * @param string|null $nitroPeriod In what notation is time measured.
     * @param int|null $boostsMin Minimum number of boosts.
     * @param int|null $boostsMax Maximum number of boosts.
     * @param string|null $billing Has billing.
     * @param string|null $gifts Has gifts.
     * @param string|null $transactions Has transactions.
     * @param array|null $badge List of badges.
     * @param array|null $condition List of account conditions.
     * @param int|null $chatMin Minimum number of chats.
     * @param int|null $chatMax Maximum number of chats.
     * @param int|null $minAdminMembers Minimum number of subscribers in server, where account is administrator/owner.
     * @param int|null $maxAdminMembers Maximum number of subscribers in server, where account is administrator/owner.
     * @param int|null $minAdmin Minimum number of servers, where account is administrator/owner.
     * @param int|null $maxAdmin Maximum number of servers, where account is administrator/owner.
     * @param int|null $reg How old is the account.
     * @param string|null $regPeriod In what notation is time measured.
     * @param array|null $language List of languages.
     * @param array|null $notLanguage List of languages that won't be included.
     * @param string|null $clans Has clans.
     * @param int|null $minAdminClans Minimum number of clans, where account is administrator.
     * @param int|null $maxAdminClans Maximum number of clans, where account is administrator.
     * @param int|null $minOwnerClans Minimum number of clans, where account is owner.
     * @param int|null $maxOwnerClans Maximum number of clans, where account is owner.
     * @param array|null $country List of allowed countries.
     * @param array|null $notCountry List of disallowed countries.
     * @param int|null $minServers Minimum count of servers.
     * @param int|null $maxServers Maximum count of servers.
     * @param string|null $_2fa Has two-factor authentication.
     * @param int|null $minFullCredits Minimum number of Nitro full credits.
     * @param int|null $maxFullCredits Maximum number of Nitro full credits.
     * @param int|null $minBasicCredits Minimum number of Nitro basic credits.
     * @param int|null $maxBasicCredits Maximum number of Nitro basic credits.
     * @param int|null $minOrbs Minimum number of Discord Orbs.
     * @param int|null $maxOrbs Maximum number of Discord Orbs.
     * @return \Lolzteam\Generated\Market\Models\CategoryDiscordResponse
     */
    public function discord(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        array|null $emailType = null,
        string|null $itemDomain = null,
        string|null $tel = null,
        string|null $nitro = null,
        array|null $nitroType = null,
        int|null $nitroLength = null,
        string|null $nitroPeriod = null,
        int|null $boostsMin = null,
        int|null $boostsMax = null,
        string|null $billing = null,
        string|null $gifts = null,
        string|null $transactions = null,
        array|null $badge = null,
        array|null $condition = null,
        int|null $chatMin = null,
        int|null $chatMax = null,
        int|null $minAdminMembers = null,
        int|null $maxAdminMembers = null,
        int|null $minAdmin = null,
        int|null $maxAdmin = null,
        int|null $reg = null,
        string|null $regPeriod = null,
        array|null $language = null,
        array|null $notLanguage = null,
        string|null $clans = null,
        int|null $minAdminClans = null,
        int|null $maxAdminClans = null,
        int|null $minOwnerClans = null,
        int|null $maxOwnerClans = null,
        array|null $country = null,
        array|null $notCountry = null,
        int|null $minServers = null,
        int|null $maxServers = null,
        string|null $_2fa = null,
        int|null $minFullCredits = null,
        int|null $maxFullCredits = null,
        int|null $minBasicCredits = null,
        int|null $maxBasicCredits = null,
        int|null $minOrbs = null,
        int|null $maxOrbs = null,
    ): \Lolzteam\Generated\Market\Models\CategoryDiscordResponse {
        $path = '/discord';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($emailType !== null) {
            $params['email_type[]'] = $emailType;
        }
        if ($itemDomain !== null) {
            $params['item_domain'] = $itemDomain;
        }
        if ($tel !== null) {
            $params['tel'] = $tel;
        }
        if ($nitro !== null) {
            $params['nitro'] = $nitro;
        }
        if ($nitroType !== null) {
            $params['nitro_type[]'] = $nitroType;
        }
        if ($nitroLength !== null) {
            $params['nitro_length'] = $nitroLength;
        }
        if ($nitroPeriod !== null) {
            $params['nitro_period'] = $nitroPeriod;
        }
        if ($boostsMin !== null) {
            $params['boosts_min'] = $boostsMin;
        }
        if ($boostsMax !== null) {
            $params['boosts_max'] = $boostsMax;
        }
        if ($billing !== null) {
            $params['billing'] = $billing;
        }
        if ($gifts !== null) {
            $params['gifts'] = $gifts;
        }
        if ($transactions !== null) {
            $params['transactions'] = $transactions;
        }
        if ($badge !== null) {
            $params['badge[]'] = $badge;
        }
        if ($condition !== null) {
            $params['condition[]'] = $condition;
        }
        if ($chatMin !== null) {
            $params['chat_min'] = $chatMin;
        }
        if ($chatMax !== null) {
            $params['chat_max'] = $chatMax;
        }
        if ($minAdminMembers !== null) {
            $params['min_admin_members'] = $minAdminMembers;
        }
        if ($maxAdminMembers !== null) {
            $params['max_admin_members'] = $maxAdminMembers;
        }
        if ($minAdmin !== null) {
            $params['min_admin'] = $minAdmin;
        }
        if ($maxAdmin !== null) {
            $params['max_admin'] = $maxAdmin;
        }
        if ($reg !== null) {
            $params['reg'] = $reg;
        }
        if ($regPeriod !== null) {
            $params['reg_period'] = $regPeriod;
        }
        if ($language !== null) {
            $params['language[]'] = $language;
        }
        if ($notLanguage !== null) {
            $params['not_language[]'] = $notLanguage;
        }
        if ($clans !== null) {
            $params['clans'] = $clans;
        }
        if ($minAdminClans !== null) {
            $params['min_admin_clans'] = $minAdminClans;
        }
        if ($maxAdminClans !== null) {
            $params['max_admin_clans'] = $maxAdminClans;
        }
        if ($minOwnerClans !== null) {
            $params['min_owner_clans'] = $minOwnerClans;
        }
        if ($maxOwnerClans !== null) {
            $params['max_owner_clans'] = $maxOwnerClans;
        }
        if ($country !== null) {
            $params['country[]'] = $country;
        }
        if ($notCountry !== null) {
            $params['not_country[]'] = $notCountry;
        }
        if ($minServers !== null) {
            $params['min_servers'] = $minServers;
        }
        if ($maxServers !== null) {
            $params['max_servers'] = $maxServers;
        }
        if ($_2fa !== null) {
            $params['2fa'] = $_2fa;
        }
        if ($minFullCredits !== null) {
            $params['min_full_credits'] = $minFullCredits;
        }
        if ($maxFullCredits !== null) {
            $params['max_full_credits'] = $maxFullCredits;
        }
        if ($minBasicCredits !== null) {
            $params['min_basic_credits'] = $minBasicCredits;
        }
        if ($maxBasicCredits !== null) {
            $params['max_basic_credits'] = $maxBasicCredits;
        }
        if ($minOrbs !== null) {
            $params['min_orbs'] = $minOrbs;
        }
        if ($maxOrbs !== null) {
            $params['max_orbs'] = $maxOrbs;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryDiscordResponse::fromArray($response);
    }

    /**
     * TikTok
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /tiktok
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param array|null $emailType Email type.
     * @param string|null $itemDomain Domain of native/autoreg email.
     * @param string|null $tel Has linked mobile.
     * @param int|null $reg How old is the account.
     * @param string|null $regPeriod In what notation is time measured.
     * @param int|null $followersMin Minimum number of followers.
     * @param int|null $followersMax Maximum number of followers.
     * @param int|null $postMin Minimum number of posts.
     * @param int|null $postMax Maximum number of posts.
     * @param int|null $likeMin Minimum number of likes.
     * @param int|null $likeMax Maximum number of likes.
     * @param int|null $coinsMin Minimum number of coins.
     * @param int|null $coinsMax Maximum number of coins.
     * @param string|null $cookieLogin Login by cookies.
     * @param string|null $verified Has verified.
     * @param string|null $email Has linked email.
     * @return \Lolzteam\Generated\Market\Models\CategoryTikTokResponse
     */
    public function tikTok(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        array|null $emailType = null,
        string|null $itemDomain = null,
        string|null $tel = null,
        int|null $reg = null,
        string|null $regPeriod = null,
        int|null $followersMin = null,
        int|null $followersMax = null,
        int|null $postMin = null,
        int|null $postMax = null,
        int|null $likeMin = null,
        int|null $likeMax = null,
        int|null $coinsMin = null,
        int|null $coinsMax = null,
        string|null $cookieLogin = null,
        string|null $verified = null,
        string|null $email = null,
    ): \Lolzteam\Generated\Market\Models\CategoryTikTokResponse {
        $path = '/tiktok';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($emailType !== null) {
            $params['email_type[]'] = $emailType;
        }
        if ($itemDomain !== null) {
            $params['item_domain'] = $itemDomain;
        }
        if ($tel !== null) {
            $params['tel'] = $tel;
        }
        if ($reg !== null) {
            $params['reg'] = $reg;
        }
        if ($regPeriod !== null) {
            $params['reg_period'] = $regPeriod;
        }
        if ($followersMin !== null) {
            $params['followers_min'] = $followersMin;
        }
        if ($followersMax !== null) {
            $params['followers_max'] = $followersMax;
        }
        if ($postMin !== null) {
            $params['post_min'] = $postMin;
        }
        if ($postMax !== null) {
            $params['post_max'] = $postMax;
        }
        if ($likeMin !== null) {
            $params['like_min'] = $likeMin;
        }
        if ($likeMax !== null) {
            $params['like_max'] = $likeMax;
        }
        if ($coinsMin !== null) {
            $params['coins_min'] = $coinsMin;
        }
        if ($coinsMax !== null) {
            $params['coins_max'] = $coinsMax;
        }
        if ($cookieLogin !== null) {
            $params['cookie_login'] = $cookieLogin;
        }
        if ($verified !== null) {
            $params['verified'] = $verified;
        }
        if ($email !== null) {
            $params['email'] = $email;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryTikTokResponse::fromArray($response);
    }

    /**
     * Instagram
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /instagram
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param array|null $emailType Email type.
     * @param string|null $itemDomain Domain of native/autoreg email.
     * @param string|null $tel Has linked mobile.
     * @param array|null $country List of allowed countries.
     * @param array|null $notCountry List of disallowed countries.
     * @param string|null $cookies Login by cookies.
     * @param string|null $loginWithoutCookies Login without cookies.
     * @param int|null $followersMin Minimum number of followers.
     * @param int|null $followersMax Maximum number of followers.
     * @param int|null $postMin Minimum number of posts.
     * @param int|null $postMax Maximum number of posts.
     * @param int|null $reg How old is the account.
     * @param string|null $regPeriod In what notation is time measured.
     * @return \Lolzteam\Generated\Market\Models\CategoryInstagramResponse
     */
    public function instagram(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        array|null $emailType = null,
        string|null $itemDomain = null,
        string|null $tel = null,
        array|null $country = null,
        array|null $notCountry = null,
        string|null $cookies = null,
        string|null $loginWithoutCookies = null,
        int|null $followersMin = null,
        int|null $followersMax = null,
        int|null $postMin = null,
        int|null $postMax = null,
        int|null $reg = null,
        string|null $regPeriod = null,
    ): \Lolzteam\Generated\Market\Models\CategoryInstagramResponse {
        $path = '/instagram';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($emailType !== null) {
            $params['email_type[]'] = $emailType;
        }
        if ($itemDomain !== null) {
            $params['item_domain'] = $itemDomain;
        }
        if ($tel !== null) {
            $params['tel'] = $tel;
        }
        if ($country !== null) {
            $params['country[]'] = $country;
        }
        if ($notCountry !== null) {
            $params['not_country[]'] = $notCountry;
        }
        if ($cookies !== null) {
            $params['cookies'] = $cookies;
        }
        if ($loginWithoutCookies !== null) {
            $params['login_without_cookies'] = $loginWithoutCookies;
        }
        if ($followersMin !== null) {
            $params['followers_min'] = $followersMin;
        }
        if ($followersMax !== null) {
            $params['followers_max'] = $followersMax;
        }
        if ($postMin !== null) {
            $params['post_min'] = $postMin;
        }
        if ($postMax !== null) {
            $params['post_max'] = $postMax;
        }
        if ($reg !== null) {
            $params['reg'] = $reg;
        }
        if ($regPeriod !== null) {
            $params['reg_period'] = $regPeriod;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryInstagramResponse::fromArray($response);
    }

    /**
     * BattleNet
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /battlenet
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param array|null $emailType Email type.
     * @param string|null $itemDomain Domain of native/autoreg email.
     * @param int|null $eg Guarantee type.
     * @param array|null $game List of games.
     * @param int|null $daybreak Number of days the account has been offline.
     * @param array|null $country List of allowed countries.
     * @param array|null $notCountry List of disallowed countries.
     * @param string|null $tel Has linked mobile.
     * @param string|null $editBtag Can edit BattleTag.
     * @param string|null $changeableFn Can edit full name.
     * @param string|null $realId Real id.
     * @param string|null $parentControl Has disabled parent control.
     * @param string|null $noBans Has no bans.
     * @param int|null $balanceMin Minimum balance.
     * @param int|null $balanceMax Maximum balance.
     * @return \Lolzteam\Generated\Market\Models\CategoryBattleNetResponse
     */
    public function battleNet(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        array|null $emailType = null,
        string|null $itemDomain = null,
        int|null $eg = null,
        array|null $game = null,
        int|null $daybreak = null,
        array|null $country = null,
        array|null $notCountry = null,
        string|null $tel = null,
        string|null $editBtag = null,
        string|null $changeableFn = null,
        string|null $realId = null,
        string|null $parentControl = null,
        string|null $noBans = null,
        int|null $balanceMin = null,
        int|null $balanceMax = null,
    ): \Lolzteam\Generated\Market\Models\CategoryBattleNetResponse {
        $path = '/battlenet';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($emailType !== null) {
            $params['email_type[]'] = $emailType;
        }
        if ($itemDomain !== null) {
            $params['item_domain'] = $itemDomain;
        }
        if ($eg !== null) {
            $params['eg'] = $eg;
        }
        if ($game !== null) {
            $params['game[]'] = $game;
        }
        if ($daybreak !== null) {
            $params['daybreak'] = $daybreak;
        }
        if ($country !== null) {
            $params['country[]'] = $country;
        }
        if ($notCountry !== null) {
            $params['not_country[]'] = $notCountry;
        }
        if ($tel !== null) {
            $params['tel'] = $tel;
        }
        if ($editBtag !== null) {
            $params['edit_btag'] = $editBtag;
        }
        if ($changeableFn !== null) {
            $params['changeable_fn'] = $changeableFn;
        }
        if ($realId !== null) {
            $params['real_id'] = $realId;
        }
        if ($parentControl !== null) {
            $params['parent_control'] = $parentControl;
        }
        if ($noBans !== null) {
            $params['no_bans'] = $noBans;
        }
        if ($balanceMin !== null) {
            $params['balance_min'] = $balanceMin;
        }
        if ($balanceMax !== null) {
            $params['balance_max'] = $balanceMax;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryBattleNetResponse::fromArray($response);
    }

    /**
     * ChatGPT
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /chatgpt
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param array|null $emailType Email type.
     * @param string|null $itemDomain Domain of native/autoreg email.
     * @param array|null $subscription List of allowed subscriptions.
     * @param int|null $subscriptionLength Length of subscription.
     * @param string|null $subscriptionPeriod In what notation is time measured.
     * @param string|null $autorenewal Is auto renewal enabled.
     * @param string|null $tel Has linked mobile.
     * @param string|null $transactions Has transactions.
     * @param int|null $reg How old is the account.
     * @param string|null $regPeriod In what notation is time measured.
     * @param array|null $openaiTier List of allowed tiers.
     * @param int|null $openaiBalanceMin Minimum OpenAI credit balance.
     * @param int|null $openaiBalanceMax Maximum OpenAI credit balance.
     * @return \Lolzteam\Generated\Market\Models\CategoryChatGPTResponse
     */
    public function chatGPT(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        array|null $emailType = null,
        string|null $itemDomain = null,
        array|null $subscription = null,
        int|null $subscriptionLength = null,
        string|null $subscriptionPeriod = null,
        string|null $autorenewal = null,
        string|null $tel = null,
        string|null $transactions = null,
        int|null $reg = null,
        string|null $regPeriod = null,
        array|null $openaiTier = null,
        int|null $openaiBalanceMin = null,
        int|null $openaiBalanceMax = null,
    ): \Lolzteam\Generated\Market\Models\CategoryChatGPTResponse {
        $path = '/chatgpt';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($emailType !== null) {
            $params['email_type[]'] = $emailType;
        }
        if ($itemDomain !== null) {
            $params['item_domain'] = $itemDomain;
        }
        if ($subscription !== null) {
            $params['subscription[]'] = $subscription;
        }
        if ($subscriptionLength !== null) {
            $params['subscription_length'] = $subscriptionLength;
        }
        if ($subscriptionPeriod !== null) {
            $params['subscription_period'] = $subscriptionPeriod;
        }
        if ($autorenewal !== null) {
            $params['autorenewal'] = $autorenewal;
        }
        if ($tel !== null) {
            $params['tel'] = $tel;
        }
        if ($transactions !== null) {
            $params['transactions'] = $transactions;
        }
        if ($reg !== null) {
            $params['reg'] = $reg;
        }
        if ($regPeriod !== null) {
            $params['reg_period'] = $regPeriod;
        }
        if ($openaiTier !== null) {
            $params['openai_tier[]'] = $openaiTier;
        }
        if ($openaiBalanceMin !== null) {
            $params['openai_balance_min'] = $openaiBalanceMin;
        }
        if ($openaiBalanceMax !== null) {
            $params['openai_balance_max'] = $openaiBalanceMax;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryChatGPTResponse::fromArray($response);
    }

    /**
     * VPN
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /vpn
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param array|null $service List of allowed VPN services.
     * @param int|null $subscriptionLength Length of subscription.
     * @param string|null $subscriptionPeriod In what notation is time measured.
     * @param string|null $autorenewal Is auto renewal enabled.
     * @return \Lolzteam\Generated\Market\Models\CategoryVpnResponse
     */
    public function vpn(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        array|null $service = null,
        int|null $subscriptionLength = null,
        string|null $subscriptionPeriod = null,
        string|null $autorenewal = null,
    ): \Lolzteam\Generated\Market\Models\CategoryVpnResponse {
        $path = '/vpn';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($service !== null) {
            $params['service[]'] = $service;
        }
        if ($subscriptionLength !== null) {
            $params['subscription_length'] = $subscriptionLength;
        }
        if ($subscriptionPeriod !== null) {
            $params['subscription_period'] = $subscriptionPeriod;
        }
        if ($autorenewal !== null) {
            $params['autorenewal'] = $autorenewal;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryVpnResponse::fromArray($response);
    }

    /**
     * Roblox
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /roblox
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param string|null $email Has verified email.
     * @param int|null $robuxMin Minimum robux.
     * @param int|null $robuxMax Maximum robux.
     * @param int|null $friendsMin Minimum friends.
     * @param int|null $friendsMax Maximum friends.
     * @param int|null $followersMin Minimum number of followers.
     * @param int|null $followersMax Maximum number of followers.
     * @param array|null $country List of allowed countries.
     * @param array|null $notCountry List of disallowed countries.
     * @param int|null $reg How old is the account.
     * @param string|null $regPeriod In what notation is time measured.
     * @param string|null $subscription Name of subscription.
     * @param int|null $subscriptionLength Length of subscription.
     * @param string|null $subscriptionPeriod In what notation is time measured.
     * @param string|null $autorenewal Is auto renewal enabled.
     * @param string|null $xboxConnected Xbox connected to account.
     * @param string|null $psnConnected PSN connected to account.
     * @param string|null $verified Has verified.
     * @param string|null $ageVerified Account is age verified via documents.
     * @param int|null $incomingRobuxTotalMin Minimum amount of incoming robux.
     * @param int|null $incomingRobuxTotalMax Maximum amount of incoming robux.
     * @param int|null $limitedPriceMin Minimum limited items value.
     * @param int|null $limitedPriceMax Maximum limited items value.
     * @param int|null $gamepassMin Minimum total Robux cost of all game passes in popular Roblox games..
     * @param int|null $gamepassMax Maximum total Robux cost of all game passes in popular Roblox games..
     * @param string|null $gameDonations Has game donations.
     * @param int|null $invMin Minimum inventory value.
     * @param int|null $invMax Maximum inventory value.
     * @param int|null $ugcLimitedPriceMin Minimum UGC limited items value.
     * @param int|null $ugcLimitedPriceMax Maximum UGC limited items value.
     * @param int|null $creditBalanceMin Minimum credit balance.
     * @param int|null $creditBalanceMax Maximum credit balance.
     * @param int|null $offsaleMin Minimum offsale items count.
     * @param int|null $offsaleMax Maximum offsale items count.
     * @param string|null $voice Voice chat is available.
     * @param array|null $ageGroup List of allowed age groups.
     * @param array|null $notAgeGroup List of disallowed age groups.
     * @return \Lolzteam\Generated\Market\Models\CategoryRobloxResponse
     */
    public function roblox(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        string|null $email = null,
        int|null $robuxMin = null,
        int|null $robuxMax = null,
        int|null $friendsMin = null,
        int|null $friendsMax = null,
        int|null $followersMin = null,
        int|null $followersMax = null,
        array|null $country = null,
        array|null $notCountry = null,
        int|null $reg = null,
        string|null $regPeriod = null,
        string|null $subscription = null,
        int|null $subscriptionLength = null,
        string|null $subscriptionPeriod = null,
        string|null $autorenewal = null,
        string|null $xboxConnected = null,
        string|null $psnConnected = null,
        string|null $verified = null,
        string|null $ageVerified = null,
        int|null $incomingRobuxTotalMin = null,
        int|null $incomingRobuxTotalMax = null,
        int|null $limitedPriceMin = null,
        int|null $limitedPriceMax = null,
        int|null $gamepassMin = null,
        int|null $gamepassMax = null,
        string|null $gameDonations = null,
        int|null $invMin = null,
        int|null $invMax = null,
        int|null $ugcLimitedPriceMin = null,
        int|null $ugcLimitedPriceMax = null,
        int|null $creditBalanceMin = null,
        int|null $creditBalanceMax = null,
        int|null $offsaleMin = null,
        int|null $offsaleMax = null,
        string|null $voice = null,
        array|null $ageGroup = null,
        array|null $notAgeGroup = null,
    ): \Lolzteam\Generated\Market\Models\CategoryRobloxResponse {
        $path = '/roblox';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($email !== null) {
            $params['email'] = $email;
        }
        if ($robuxMin !== null) {
            $params['robux_min'] = $robuxMin;
        }
        if ($robuxMax !== null) {
            $params['robux_max'] = $robuxMax;
        }
        if ($friendsMin !== null) {
            $params['friends_min'] = $friendsMin;
        }
        if ($friendsMax !== null) {
            $params['friends_max'] = $friendsMax;
        }
        if ($followersMin !== null) {
            $params['followers_min'] = $followersMin;
        }
        if ($followersMax !== null) {
            $params['followers_max'] = $followersMax;
        }
        if ($country !== null) {
            $params['country'] = $country;
        }
        if ($notCountry !== null) {
            $params['not_country'] = $notCountry;
        }
        if ($reg !== null) {
            $params['reg'] = $reg;
        }
        if ($regPeriod !== null) {
            $params['reg_period'] = $regPeriod;
        }
        if ($subscription !== null) {
            $params['subscription'] = $subscription;
        }
        if ($subscriptionLength !== null) {
            $params['subscription_length'] = $subscriptionLength;
        }
        if ($subscriptionPeriod !== null) {
            $params['subscription_period'] = $subscriptionPeriod;
        }
        if ($autorenewal !== null) {
            $params['autorenewal'] = $autorenewal;
        }
        if ($xboxConnected !== null) {
            $params['xbox_connected'] = $xboxConnected;
        }
        if ($psnConnected !== null) {
            $params['psn_connected'] = $psnConnected;
        }
        if ($verified !== null) {
            $params['verified'] = $verified;
        }
        if ($ageVerified !== null) {
            $params['age_verified'] = $ageVerified;
        }
        if ($incomingRobuxTotalMin !== null) {
            $params['incoming_robux_total_min'] = $incomingRobuxTotalMin;
        }
        if ($incomingRobuxTotalMax !== null) {
            $params['incoming_robux_total_max'] = $incomingRobuxTotalMax;
        }
        if ($limitedPriceMin !== null) {
            $params['limited_price_min'] = $limitedPriceMin;
        }
        if ($limitedPriceMax !== null) {
            $params['limited_price_max'] = $limitedPriceMax;
        }
        if ($gamepassMin !== null) {
            $params['gamepass_min'] = $gamepassMin;
        }
        if ($gamepassMax !== null) {
            $params['gamepass_max'] = $gamepassMax;
        }
        if ($gameDonations !== null) {
            $params['game_donations'] = $gameDonations;
        }
        if ($invMin !== null) {
            $params['inv_min'] = $invMin;
        }
        if ($invMax !== null) {
            $params['inv_max'] = $invMax;
        }
        if ($ugcLimitedPriceMin !== null) {
            $params['ugc_limited_price_min'] = $ugcLimitedPriceMin;
        }
        if ($ugcLimitedPriceMax !== null) {
            $params['ugc_limited_price_max'] = $ugcLimitedPriceMax;
        }
        if ($creditBalanceMin !== null) {
            $params['credit_balance_min'] = $creditBalanceMin;
        }
        if ($creditBalanceMax !== null) {
            $params['credit_balance_max'] = $creditBalanceMax;
        }
        if ($offsaleMin !== null) {
            $params['offsale_min'] = $offsaleMin;
        }
        if ($offsaleMax !== null) {
            $params['offsale_max'] = $offsaleMax;
        }
        if ($voice !== null) {
            $params['voice'] = $voice;
        }
        if ($ageGroup !== null) {
            $params['age_group[]'] = $ageGroup;
        }
        if ($notAgeGroup !== null) {
            $params['not_age_group[]'] = $notAgeGroup;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryRobloxResponse::fromArray($response);
    }

    /**
     * Warface
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /warface
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param int|null $rankMin Minimum rank.
     * @param int|null $rankMax Maximum rank.
     * @param int|null $bonusRankMin Minimum bonus rank.
     * @param int|null $bonusRankMax Maximum bonus rank.
     * @param string|null $tel Has linked mobile.
     * @param int|null $daybreak Number of days the account has been offline.
     * @param int|null $kreditsMin Minimum amount of Kredits.
     * @param int|null $kreditsMax Maximum amount of Kredits.
     * @param int|null $totalKreditsMin Minimum total donated Kredits.
     * @param int|null $totalKreditsMax Maximum total donated Kredits.
     * @return \Lolzteam\Generated\Market\Models\CategoryWarfaceResponse
     */
    public function warface(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        int|null $rankMin = null,
        int|null $rankMax = null,
        int|null $bonusRankMin = null,
        int|null $bonusRankMax = null,
        string|null $tel = null,
        int|null $daybreak = null,
        int|null $kreditsMin = null,
        int|null $kreditsMax = null,
        int|null $totalKreditsMin = null,
        int|null $totalKreditsMax = null,
    ): \Lolzteam\Generated\Market\Models\CategoryWarfaceResponse {
        $path = '/warface';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($rankMin !== null) {
            $params['rank_min'] = $rankMin;
        }
        if ($rankMax !== null) {
            $params['rank_max'] = $rankMax;
        }
        if ($bonusRankMin !== null) {
            $params['bonus_rank_min'] = $bonusRankMin;
        }
        if ($bonusRankMax !== null) {
            $params['bonus_rank_max'] = $bonusRankMax;
        }
        if ($tel !== null) {
            $params['tel'] = $tel;
        }
        if ($daybreak !== null) {
            $params['daybreak'] = $daybreak;
        }
        if ($kreditsMin !== null) {
            $params['kredits_min'] = $kreditsMin;
        }
        if ($kreditsMax !== null) {
            $params['kredits_max'] = $kreditsMax;
        }
        if ($totalKreditsMin !== null) {
            $params['total_kredits_min'] = $totalKreditsMin;
        }
        if ($totalKreditsMax !== null) {
            $params['total_kredits_max'] = $totalKreditsMax;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryWarfaceResponse::fromArray($response);
    }

    /**
     * Minecraft
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /minecraft
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param string|null $subscription Name of subscription.
     * @param int|null $subscriptionLength Length of subscription.
     * @param string|null $subscriptionPeriod In what notation is time measured.
     * @param string|null $autorenewal Is auto renewal enabled.
     * @param string|null $java Has java edition.
     * @param string|null $bedrock Has bedrock edition.
     * @param string|null $dungeons Has Minecraft Dungeons.
     * @param string|null $legends Has Minecraft Legends.
     * @param string|null $changeNickname Can change nickname.
     * @param array|null $capes List of capes.
     * @param int|null $capesMin Minimum number of capes.
     * @param int|null $capesMax Maximum number of capes.
     * @param array|null $country List of allowed countries.
     * @param array|null $notCountry List of disallowed countries.
     * @param string|null $hypixelBan Has active Hypixel ban.
     * @param string|null $hypixelSkyblockApiEnabled Is API enabled in Hypixel Skyblock.
     * @param array|null $rankHypixel Rank on hypixel.
     * @param int|null $levelHypixelMin Minimum number of level hypixel.
     * @param int|null $levelHypixelMax Maximum number of level hypixel.
     * @param int|null $achievementHypixelMin Minimum number of achievement hypixel.
     * @param int|null $achievementHypixelMax Maximum number of achievement hypixel.
     * @param int|null $levelHypixelSkyblockMin Minimum level on Hypixel SkyBlock.
     * @param int|null $levelHypixelSkyblockMax Maximum level on Hypixel SkyBlock.
     * @param int|null $netWorthHypixelSkyblockMin Minimum net worth on Hypixel SkyBlock.
     * @param int|null $netWorthHypixelSkyblockMax Maximum net worth on Hypixel SkyBlock.
     * @param int|null $reg How old is the account.
     * @param string|null $regPeriod In what notation is time measured.
     * @param int|null $lastLoginHypixel How old is the last login account.
     * @param string|null $lastLoginHypixelPeriod In what notation is time measured.
     * @param string|null $canChangeDetails Can change details.
     * @param int|null $nicknameLengthMin Minimum number of characters in nickname.
     * @param int|null $nicknameLengthMax Maximum number of characters in nickname.
     * @param string|null $hypixelBanParsed Was Hypixel ban parsed by Market.
     * @param int|null $minecoinsMin Minimum number of Minecoins.
     * @param int|null $minecoinsMax Maximum number of Minecoins.
     * @return \Lolzteam\Generated\Market\Models\CategoryMinecraftResponse
     */
    public function minecraft(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        string|null $subscription = null,
        int|null $subscriptionLength = null,
        string|null $subscriptionPeriod = null,
        string|null $autorenewal = null,
        string|null $java = null,
        string|null $bedrock = null,
        string|null $dungeons = null,
        string|null $legends = null,
        string|null $changeNickname = null,
        array|null $capes = null,
        int|null $capesMin = null,
        int|null $capesMax = null,
        array|null $country = null,
        array|null $notCountry = null,
        string|null $hypixelBan = null,
        string|null $hypixelSkyblockApiEnabled = null,
        array|null $rankHypixel = null,
        int|null $levelHypixelMin = null,
        int|null $levelHypixelMax = null,
        int|null $achievementHypixelMin = null,
        int|null $achievementHypixelMax = null,
        int|null $levelHypixelSkyblockMin = null,
        int|null $levelHypixelSkyblockMax = null,
        int|null $netWorthHypixelSkyblockMin = null,
        int|null $netWorthHypixelSkyblockMax = null,
        int|null $reg = null,
        string|null $regPeriod = null,
        int|null $lastLoginHypixel = null,
        string|null $lastLoginHypixelPeriod = null,
        string|null $canChangeDetails = null,
        int|null $nicknameLengthMin = null,
        int|null $nicknameLengthMax = null,
        string|null $hypixelBanParsed = null,
        int|null $minecoinsMin = null,
        int|null $minecoinsMax = null,
    ): \Lolzteam\Generated\Market\Models\CategoryMinecraftResponse {
        $path = '/minecraft';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($subscription !== null) {
            $params['subscription'] = $subscription;
        }
        if ($subscriptionLength !== null) {
            $params['subscription_length'] = $subscriptionLength;
        }
        if ($subscriptionPeriod !== null) {
            $params['subscription_period'] = $subscriptionPeriod;
        }
        if ($autorenewal !== null) {
            $params['autorenewal'] = $autorenewal;
        }
        if ($java !== null) {
            $params['java'] = $java;
        }
        if ($bedrock !== null) {
            $params['bedrock'] = $bedrock;
        }
        if ($dungeons !== null) {
            $params['dungeons'] = $dungeons;
        }
        if ($legends !== null) {
            $params['legends'] = $legends;
        }
        if ($changeNickname !== null) {
            $params['change_nickname'] = $changeNickname;
        }
        if ($capes !== null) {
            $params['capes[]'] = $capes;
        }
        if ($capesMin !== null) {
            $params['capes_min'] = $capesMin;
        }
        if ($capesMax !== null) {
            $params['capes_max'] = $capesMax;
        }
        if ($country !== null) {
            $params['country[]'] = $country;
        }
        if ($notCountry !== null) {
            $params['not_country[]'] = $notCountry;
        }
        if ($hypixelBan !== null) {
            $params['hypixel_ban'] = $hypixelBan;
        }
        if ($hypixelSkyblockApiEnabled !== null) {
            $params['hypixel_skyblock_api_enabled'] = $hypixelSkyblockApiEnabled;
        }
        if ($rankHypixel !== null) {
            $params['rank_hypixel[]'] = $rankHypixel;
        }
        if ($levelHypixelMin !== null) {
            $params['level_hypixel_min'] = $levelHypixelMin;
        }
        if ($levelHypixelMax !== null) {
            $params['level_hypixel_max'] = $levelHypixelMax;
        }
        if ($achievementHypixelMin !== null) {
            $params['achievement_hypixel_min'] = $achievementHypixelMin;
        }
        if ($achievementHypixelMax !== null) {
            $params['achievement_hypixel_max'] = $achievementHypixelMax;
        }
        if ($levelHypixelSkyblockMin !== null) {
            $params['level_hypixel_skyblock_min'] = $levelHypixelSkyblockMin;
        }
        if ($levelHypixelSkyblockMax !== null) {
            $params['level_hypixel_skyblock_max'] = $levelHypixelSkyblockMax;
        }
        if ($netWorthHypixelSkyblockMin !== null) {
            $params['net_worth_hypixel_skyblock_min'] = $netWorthHypixelSkyblockMin;
        }
        if ($netWorthHypixelSkyblockMax !== null) {
            $params['net_worth_hypixel_skyblock_max'] = $netWorthHypixelSkyblockMax;
        }
        if ($reg !== null) {
            $params['reg'] = $reg;
        }
        if ($regPeriod !== null) {
            $params['reg_period'] = $regPeriod;
        }
        if ($lastLoginHypixel !== null) {
            $params['last_login_hypixel'] = $lastLoginHypixel;
        }
        if ($lastLoginHypixelPeriod !== null) {
            $params['last_login_hypixel_period'] = $lastLoginHypixelPeriod;
        }
        if ($canChangeDetails !== null) {
            $params['can_change_details'] = $canChangeDetails;
        }
        if ($nicknameLengthMin !== null) {
            $params['nickname_length_min'] = $nicknameLengthMin;
        }
        if ($nicknameLengthMax !== null) {
            $params['nickname_length_max'] = $nicknameLengthMax;
        }
        if ($hypixelBanParsed !== null) {
            $params['hypixel_ban_parsed'] = $hypixelBanParsed;
        }
        if ($minecoinsMin !== null) {
            $params['minecoins_min'] = $minecoinsMin;
        }
        if ($minecoinsMax !== null) {
            $params['minecoins_max'] = $minecoinsMax;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryMinecraftResponse::fromArray($response);
    }

    /**
     * Hytale
     *
     * Displays a list of accounts in a specific category according to your parameters.
     *
     * @endpoint GET /hytale
     * @param int|null $page The number of the page to display results from.
     * @param int|null $pmin Minimal price of account (Inclusive).
     * @param int|null $pmax Maximum price of account (Inclusive).
     * @param string|null $title The word or words contained in the account title.
     * @param string|null $orderBy Order by.
     * @param array|null $tagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $publicTagId List of tag ids (Tag list is available via **GET /me**).
     * @param array|null $notPublicTagId List of tag ids that won't be included (Tag list is available via **GET /me**).
     * @param array|null $origin List of account origins.
     * @param array|null $notOrigin List of account origins that won't be included.
     * @param int|null $userId Search accounts of user.
     * @param bool|null $nsb Not sold before.
     * @param bool|null $sb Sold before.
     * @param bool|null $nsbByMe Not sold by me before.
     * @param bool|null $sbByMe Sold by me before.
     * @param string|null $currency Currency in which the cost of the account will be searched.
     * @param bool|null $emailLoginData Has email login data.
     * @param array|null $emailProvider Email provider.
     * @param string|null $notEmailProvider Email provider.
     * @param bool|null $parseSameItemIds Parse same item ids.
     * @param array|null $edition List of allowed editions.
     * @param int|null $profilesMin Minimum number of profiles with game.
     * @param int|null $profilesMax Maximum number of profiles with game.
     * @return \Lolzteam\Generated\Market\Models\CategoryHytaleResponse
     */
    public function hytale(
        int|null $page = null,
        int|null $pmin = null,
        int|null $pmax = null,
        string|null $title = null,
        string|null $orderBy = null,
        array|null $tagId = null,
        array|null $notTagId = null,
        array|null $publicTagId = null,
        array|null $notPublicTagId = null,
        array|null $origin = null,
        array|null $notOrigin = null,
        int|null $userId = null,
        bool|null $nsb = null,
        bool|null $sb = null,
        bool|null $nsbByMe = null,
        bool|null $sbByMe = null,
        string|null $currency = null,
        bool|null $emailLoginData = null,
        array|null $emailProvider = null,
        string|null $notEmailProvider = null,
        bool|null $parseSameItemIds = null,
        array|null $edition = null,
        int|null $profilesMin = null,
        int|null $profilesMax = null,
    ): \Lolzteam\Generated\Market\Models\CategoryHytaleResponse {
        $path = '/hytale';
        $options = [];
        $params = [];
        if ($page !== null) {
            $params['page'] = $page;
        }
        if ($pmin !== null) {
            $params['pmin'] = $pmin;
        }
        if ($pmax !== null) {
            $params['pmax'] = $pmax;
        }
        if ($title !== null) {
            $params['title'] = $title;
        }
        if ($orderBy !== null) {
            $params['order_by'] = $orderBy;
        }
        if ($tagId !== null) {
            $params['tag_id[]'] = $tagId;
        }
        if ($notTagId !== null) {
            $params['not_tag_id[]'] = $notTagId;
        }
        if ($publicTagId !== null) {
            $params['public_tag_id[]'] = $publicTagId;
        }
        if ($notPublicTagId !== null) {
            $params['not_public_tag_id[]'] = $notPublicTagId;
        }
        if ($origin !== null) {
            $params['origin[]'] = $origin;
        }
        if ($notOrigin !== null) {
            $params['not_origin[]'] = $notOrigin;
        }
        if ($userId !== null) {
            $params['user_id'] = $userId;
        }
        if ($nsb !== null) {
            $params['nsb'] = $nsb;
        }
        if ($sb !== null) {
            $params['sb'] = $sb;
        }
        if ($nsbByMe !== null) {
            $params['nsb_by_me'] = $nsbByMe;
        }
        if ($sbByMe !== null) {
            $params['sb_by_me'] = $sbByMe;
        }
        if ($currency !== null) {
            $params['currency'] = $currency;
        }
        if ($emailLoginData !== null) {
            $params['email_login_data'] = $emailLoginData;
        }
        if ($emailProvider !== null) {
            $params['email_provider[]'] = $emailProvider;
        }
        if ($notEmailProvider !== null) {
            $params['not_email_provider[]'] = $notEmailProvider;
        }
        if ($parseSameItemIds !== null) {
            $params['parse_same_item_ids'] = $parseSameItemIds;
        }
        if ($edition !== null) {
            $params['edition[]'] = $edition;
        }
        if ($profilesMin !== null) {
            $params['profiles_min'] = $profilesMin;
        }
        if ($profilesMax !== null) {
            $params['profiles_max'] = $profilesMax;
        }
        if (!empty($params)) {
            $options['params'] = $params;
        }
        $response = $this->httpClient->request('GET', $path, $options);
        return \Lolzteam\Generated\Market\Models\CategoryHytaleResponse::fromArray($response);
    }
}
