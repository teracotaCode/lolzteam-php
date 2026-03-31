<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Market\Models;

use JsonSerializable;

/**
 * Auto-generated model class.
 * @property-read \Lolzteam\Generated\Market\Models\CategorySteamResponseItemsItemSteamTransactionsItem[]|null $steamTransactions Steam Transactions
 * @property-read \Lolzteam\Generated\Market\Models\CategorySteamResponseItemsItemAccountLinksItem[]|null $accountLinks Account Links
 */
class CategorySteamResponseItemsItem implements JsonSerializable
{
    public function __construct(
        public readonly int|null $itemId = null, // Item
        public readonly string|null $itemState = null, // Item
        public readonly int|null $categoryId = null, // Category
        public readonly int|null $publishedDate = null, // Published
        public readonly string|null $title = null, // Title
        public readonly string|null $description = null, // Description
        public readonly int|null $price = null, // Price
        public readonly int|null $updateStatDate = null, // Update
        public readonly int|null $refreshedDate = null, // Refreshed
        public readonly int|null $editDate = null, // Edit
        public readonly int|null $viewCount = null, // View
        public readonly int|null $isSticky = null, // Is
        public readonly string|null $itemOrigin = null, // Item
        public readonly int|null $extendedGuarantee = null, // Extended
        public readonly int|null $nsb = null, // Nsb
        public readonly int|null $allowAskDiscount = null, // Allow
        public readonly string|null $titleEn = null, // Title
        public readonly string|null $descriptionEn = null, // Description
        public readonly string|null $emailType = null, // Email
        public readonly string|null $emailProvider = null, // Email
        public readonly string|null $itemDomain = null, // Item
        public readonly string|null $resaleItemOrigin = null, // Resale
        public readonly int|null $steamItemId = null, // Steam
        public readonly string|null $steamCountry = null, // Steam
        public readonly int|null $steamRegisterDate = null, // Steam
        public readonly int|null $steamLastActivity = null, // Steam
        public readonly mixed $steamFullGames = null, // Steam
        public readonly int|null $steamCommunityBan = null, // Steam
        public readonly mixed $steamBans = null, // Steam
        public readonly int|null $steamCs2ProfileRank = null, // Steam
        public readonly string|null $steamBalance = null, // Steam
        public readonly int|null $steamCs2RankId = null, // Steam
        public readonly int|null $steamIsLimited = null, // Steam
        public readonly int|null $steamLevel = null, // Steam
        public readonly int|null $steamFriendCount = null, // Steam
        public readonly int|null $steamCs2LastActivity = null, // Steam
        public readonly int|null $steamDota2SoloMmr = null, // Steam
        public readonly int|null $steamCs2BanDate = null, // Steam
        public readonly int|null $steamConvertedBalance = null, // Steam
        public readonly int|null $steamCardsCount = null, // Steam
        public readonly int|null $steamCardsGames = null, // Steam
        public readonly int|null $steamPubgInvValue = null, // Steam
        public readonly int|null $steamCs2InvValue = null, // Steam
        public readonly int|null $steamDota2InvValue = null, // Steam
        public readonly int|null $steamTf2InvValue = null, // Steam
        public readonly int|null $steamRustInvValue = null, // Steam
        public readonly int|null $steamCs2WingmanRankId = null, // Steam
        public readonly int|null $steamGameCount = null, // Steam
        public readonly int|null $steamSteamInvValue = null, // Steam
        public readonly int|null $steamInvValue = null, // Steam
        public readonly int|null $steamCs2WinCount = null, // Steam
        public readonly int|null $steamDota2GameCount = null, // Steam
        public readonly int|null $steamDota2LoseCount = null, // Steam
        public readonly int|null $steamDota2WinCount = null, // Steam
        public readonly string|null $steamHoursPlayedRecently = null, // Steam
        public readonly int|null $steamFaceitLevel = null, // Steam
        public readonly int|null $steamPoints = null, // Steam
        public readonly int|null $steamLastTransactionDate = null, // Steam
        public readonly int|null $steamRelevantGameCount = null, // Steam
        public readonly int|null $steamGiftCount = null, // Steam
        public readonly string|null $steamLimitSpent = null, // Steam
        public readonly int|null $steamDota2Behavior = null, // Steam
        public readonly int|null $steamMfa = null, // Steam
        public readonly int|null $steamMarket = null, // Steam
        public readonly int|null $steamMarketRestrictions = null, // Steam
        public readonly int|null $steamMarketBanEndDate = null, // Steam
        public readonly int|null $steamUnturnedInvValue = null, // Steam
        public readonly int|null $steamCs2LastLaunched = null, // Steam
        public readonly int|null $steamKf2InvValue = null, // Steam
        public readonly int|null $steamDstInvValue = null, // Steam
        public readonly int|null $steamCs2PremierElo = null, // Steam
        public readonly int|null $steamHasActivatedKeys = null, // Steam
        public readonly int|null $steamCs2BanType = null, // Steam
        public readonly int|null $steamRustKillPlayer = null, // Steam
        public readonly int|null $steamRustDeaths = null, // Steam
        public readonly int|null $steamTotalGiftsRub = null, // Steam
        public readonly int|null $steamTotalRefundsRub = null, // Steam
        public readonly int|null $steamTotalIngameRub = null, // Steam
        public readonly int|null $steamTotalGamesRub = null, // Steam
        public readonly int|null $steamTotalPurchasedRub = null, // Steam
        public readonly int|null $steamDota2LastMatchDate = null, // Steam
        public readonly mixed $feedbackData = null, // Feedback
        public readonly bool|null $isIgnored = null, // Is Ignored
        public readonly float|null $priceWithSellerFee = null, // Price With Seller Fee
        public readonly mixed $guarantee = null, // Guarantee
        public readonly bool|null $canViewLoginData = null, // Can View Login Data
        public readonly bool|null $canUpdateItemStats = null, // Can Update Item Stats
        public readonly bool|null $canReportItem = null, // Can Report Item
        public readonly bool|null $canViewEmailLoginData = null, // Can View Email Login Data
        public readonly bool|null $showGetEmailCodeButton = null, // Show Get Email Code Button
        public readonly bool|null $canOpenItem = null, // Can Open Item
        public readonly bool|null $canCloseItem = null, // Can Close Item
        public readonly bool|null $canEditItem = null, // Can Edit Item
        public readonly bool|null $canDeleteItem = null, // Can Delete Item
        public readonly bool|null $canStickItem = null, // Can Stick Item
        public readonly bool|null $canUnstickItem = null, // Can Unstick Item
        public readonly \Lolzteam\Generated\Market\Models\CategorySteamResponseItemsItemBumpSettings|null $bumpSettings = null, // Bump Settings
        public readonly bool|null $canBumpItem = null, // Can Bump Item
        public readonly bool|null $canBuyItem = null, // Can Buy Item
        public readonly int|null $rubPrice = null, // Rub
        public readonly string|null $priceCurrency = null, // Price
        public readonly bool|null $canValidateAccount = null, // Can Validate Account
        public readonly bool|null $canResellItemAfterPurchase = null, // Can Resell Item After Purchase
        public readonly \Lolzteam\Generated\Market\Models\CategorySteamResponseItemsItemSteamData|null $steamData = null, // Steam Data
        public readonly bool|null $isSmallExf = null, // Is Small Exf
        public readonly int|null $accountLastActivity = null, // Account
        public readonly bool|null $hasCs2 = null, // Has Cs
        public readonly bool|null $hasDota2 = null, // Has Dota
        public readonly bool|null $hasPubg = null, // Has Pubg
        public readonly bool|null $hasTf2 = null, // Has Tf
        public readonly bool|null $hasRust = null, // Has Rust
        public readonly bool|null $steamCs2BanDateActive = null, // Steam
        public readonly bool|null $dota2CalibrationWarning = null, // Dota Calibration Warning
        public readonly bool|null $displayConvertedBalance = null, // Display Converted Balance
        public readonly array|null $inventoryValue = null, // Inventory Value
        public readonly array|null $steamCs2Medals = null, // Steam Cs Medals
        public readonly bool|null $cs2RankExpired = null, // Cs Rank Expired
        public readonly int|null $steamDota2WinRate = null, // Steam Dota Win Rate
        public readonly array|null $steamTransactions = null, // Steam Transactions
        public readonly bool|null $hasPossibleBanInDota2 = null, // Has Possible Ban In Dota
        public readonly bool|null $chineseAccount = null, // Chinese Account
        public readonly array|null $cs2MapsRanks = null, // Cs Maps Ranks
        public readonly mixed $cs2PremierElo = null, // Cs Premier Elo
        public readonly bool|null $steamLifetimeTradeBan = null, // Steam Lifetime Trade Ban
        public readonly bool|null $canViewAccountLink = null, // Can View Account Link
        public readonly array|null $accountLinks = null, // Account Links
        public readonly string|null $accountLink = null, // Account Link
        public readonly string|null $emailLoginUrl = null, // Email Login Url
        public readonly bool|null $canChangePassword = null, // Can Change Password
        public readonly string|null $itemOriginPhrase = null, // Item Origin Phrase
        public readonly int|null $soldItemsCategoryCount = null, // Sold
        public readonly int|null $restoreItemsCategoryCount = null, // Restore
        public readonly mixed $tags = null, // Tags
        public readonly mixed $noteText = null, // Note
        public readonly bool|null $hasPendingAutoBuy = null, // Has Pending Auto Buy
        public readonly string|null $descriptionHtml = null, // Description Html
        public readonly string|null $descriptionEnHtml = null, // Description En Html
        public readonly string|null $descriptionPlain = null, // Description Plain
        public readonly string|null $descriptionEnPlain = null, // Description En Plain
        public readonly \Lolzteam\Generated\Market\Models\CategorySteamResponseItemsItemSeller|null $seller = null, // Seller
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            itemId: $data['item_id'] ?? null,
            itemState: $data['item_state'] ?? null,
            categoryId: $data['category_id'] ?? null,
            publishedDate: $data['published_date'] ?? null,
            title: $data['title'] ?? null,
            description: $data['description'] ?? null,
            price: $data['price'] ?? null,
            updateStatDate: $data['update_stat_date'] ?? null,
            refreshedDate: $data['refreshed_date'] ?? null,
            editDate: $data['edit_date'] ?? null,
            viewCount: $data['view_count'] ?? null,
            isSticky: $data['is_sticky'] ?? null,
            itemOrigin: $data['item_origin'] ?? null,
            extendedGuarantee: $data['extended_guarantee'] ?? null,
            nsb: $data['nsb'] ?? null,
            allowAskDiscount: $data['allow_ask_discount'] ?? null,
            titleEn: $data['title_en'] ?? null,
            descriptionEn: $data['description_en'] ?? null,
            emailType: $data['email_type'] ?? null,
            emailProvider: $data['email_provider'] ?? null,
            itemDomain: $data['item_domain'] ?? null,
            resaleItemOrigin: $data['resale_item_origin'] ?? null,
            steamItemId: $data['steam_item_id'] ?? null,
            steamCountry: $data['steam_country'] ?? null,
            steamRegisterDate: $data['steam_register_date'] ?? null,
            steamLastActivity: $data['steam_last_activity'] ?? null,
            steamFullGames: $data['steam_full_games'] ?? null,
            steamCommunityBan: $data['steam_community_ban'] ?? null,
            steamBans: $data['steam_bans'] ?? null,
            steamCs2ProfileRank: $data['steam_cs2_profile_rank'] ?? null,
            steamBalance: $data['steam_balance'] ?? null,
            steamCs2RankId: $data['steam_cs2_rank_id'] ?? null,
            steamIsLimited: $data['steam_is_limited'] ?? null,
            steamLevel: $data['steam_level'] ?? null,
            steamFriendCount: $data['steam_friend_count'] ?? null,
            steamCs2LastActivity: $data['steam_cs2_last_activity'] ?? null,
            steamDota2SoloMmr: $data['steam_dota2_solo_mmr'] ?? null,
            steamCs2BanDate: $data['steam_cs2_ban_date'] ?? null,
            steamConvertedBalance: $data['steam_converted_balance'] ?? null,
            steamCardsCount: $data['steam_cards_count'] ?? null,
            steamCardsGames: $data['steam_cards_games'] ?? null,
            steamPubgInvValue: $data['steam_pubg_inv_value'] ?? null,
            steamCs2InvValue: $data['steam_cs2_inv_value'] ?? null,
            steamDota2InvValue: $data['steam_dota2_inv_value'] ?? null,
            steamTf2InvValue: $data['steam_tf2_inv_value'] ?? null,
            steamRustInvValue: $data['steam_rust_inv_value'] ?? null,
            steamCs2WingmanRankId: $data['steam_cs2_wingman_rank_id'] ?? null,
            steamGameCount: $data['steam_game_count'] ?? null,
            steamSteamInvValue: $data['steam_steam_inv_value'] ?? null,
            steamInvValue: $data['steam_inv_value'] ?? null,
            steamCs2WinCount: $data['steam_cs2_win_count'] ?? null,
            steamDota2GameCount: $data['steam_dota2_game_count'] ?? null,
            steamDota2LoseCount: $data['steam_dota2_lose_count'] ?? null,
            steamDota2WinCount: $data['steam_dota2_win_count'] ?? null,
            steamHoursPlayedRecently: $data['steam_hours_played_recently'] ?? null,
            steamFaceitLevel: $data['steam_faceit_level'] ?? null,
            steamPoints: $data['steam_points'] ?? null,
            steamLastTransactionDate: $data['steam_last_transaction_date'] ?? null,
            steamRelevantGameCount: $data['steam_relevant_game_count'] ?? null,
            steamGiftCount: $data['steam_gift_count'] ?? null,
            steamLimitSpent: $data['steam_limit_spent'] ?? null,
            steamDota2Behavior: $data['steam_dota2_behavior'] ?? null,
            steamMfa: $data['steam_mfa'] ?? null,
            steamMarket: $data['steam_market'] ?? null,
            steamMarketRestrictions: $data['steam_market_restrictions'] ?? null,
            steamMarketBanEndDate: $data['steam_market_ban_end_date'] ?? null,
            steamUnturnedInvValue: $data['steam_unturned_inv_value'] ?? null,
            steamCs2LastLaunched: $data['steam_cs2_last_launched'] ?? null,
            steamKf2InvValue: $data['steam_kf2_inv_value'] ?? null,
            steamDstInvValue: $data['steam_dst_inv_value'] ?? null,
            steamCs2PremierElo: $data['steam_cs2_premier_elo'] ?? null,
            steamHasActivatedKeys: $data['steam_has_activated_keys'] ?? null,
            steamCs2BanType: $data['steam_cs2_ban_type'] ?? null,
            steamRustKillPlayer: $data['steam_rust_kill_player'] ?? null,
            steamRustDeaths: $data['steam_rust_deaths'] ?? null,
            steamTotalGiftsRub: $data['steam_total_gifts_rub'] ?? null,
            steamTotalRefundsRub: $data['steam_total_refunds_rub'] ?? null,
            steamTotalIngameRub: $data['steam_total_ingame_rub'] ?? null,
            steamTotalGamesRub: $data['steam_total_games_rub'] ?? null,
            steamTotalPurchasedRub: $data['steam_total_purchased_rub'] ?? null,
            steamDota2LastMatchDate: $data['steam_dota2_last_match_date'] ?? null,
            feedbackData: $data['feedback_data'] ?? null,
            isIgnored: $data['isIgnored'] ?? null,
            priceWithSellerFee: $data['priceWithSellerFee'] ?? null,
            guarantee: $data['guarantee'] ?? null,
            canViewLoginData: $data['canViewLoginData'] ?? null,
            canUpdateItemStats: $data['canUpdateItemStats'] ?? null,
            canReportItem: $data['canReportItem'] ?? null,
            canViewEmailLoginData: $data['canViewEmailLoginData'] ?? null,
            showGetEmailCodeButton: $data['showGetEmailCodeButton'] ?? null,
            canOpenItem: $data['canOpenItem'] ?? null,
            canCloseItem: $data['canCloseItem'] ?? null,
            canEditItem: $data['canEditItem'] ?? null,
            canDeleteItem: $data['canDeleteItem'] ?? null,
            canStickItem: $data['canStickItem'] ?? null,
            canUnstickItem: $data['canUnstickItem'] ?? null,
            bumpSettings: isset($data['bumpSettings']) && is_array($data['bumpSettings']) && !empty($data['bumpSettings']) ? \Lolzteam\Generated\Market\Models\CategorySteamResponseItemsItemBumpSettings::fromArray($data['bumpSettings']) : null,
            canBumpItem: $data['canBumpItem'] ?? null,
            canBuyItem: $data['canBuyItem'] ?? null,
            rubPrice: $data['rub_price'] ?? null,
            priceCurrency: $data['price_currency'] ?? null,
            canValidateAccount: $data['canValidateAccount'] ?? null,
            canResellItemAfterPurchase: $data['canResellItemAfterPurchase'] ?? null,
            steamData: isset($data['steamData']) && is_array($data['steamData']) && !empty($data['steamData']) ? \Lolzteam\Generated\Market\Models\CategorySteamResponseItemsItemSteamData::fromArray($data['steamData']) : null,
            isSmallExf: $data['isSmallExf'] ?? null,
            accountLastActivity: $data['account_last_activity'] ?? null,
            hasCs2: $data['hasCs2'] ?? null,
            hasDota2: $data['hasDota2'] ?? null,
            hasPubg: $data['hasPubg'] ?? null,
            hasTf2: $data['hasTf2'] ?? null,
            hasRust: $data['hasRust'] ?? null,
            steamCs2BanDateActive: $data['steam_cs2_ban_date_active'] ?? null,
            dota2CalibrationWarning: $data['dota2CalibrationWarning'] ?? null,
            displayConvertedBalance: $data['displayConvertedBalance'] ?? null,
            inventoryValue: $data['inventoryValue'] ?? null,
            steamCs2Medals: $data['steamCs2Medals'] ?? null,
            cs2RankExpired: $data['cs2RankExpired'] ?? null,
            steamDota2WinRate: $data['steamDota2WinRate'] ?? null,
            steamTransactions: isset($data['steamTransactions']) && is_array($data['steamTransactions']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategorySteamResponseItemsItemSteamTransactionsItem::fromArray($item), $data['steamTransactions']) : null,
            hasPossibleBanInDota2: $data['hasPossibleBanInDota2'] ?? null,
            chineseAccount: $data['chineseAccount'] ?? null,
            cs2MapsRanks: $data['cs2MapsRanks'] ?? null,
            cs2PremierElo: $data['cs2PremierElo'] ?? null,
            steamLifetimeTradeBan: $data['steamLifetimeTradeBan'] ?? null,
            canViewAccountLink: $data['canViewAccountLink'] ?? null,
            accountLinks: isset($data['accountLinks']) && is_array($data['accountLinks']) ? array_map(static fn(array $item) => \Lolzteam\Generated\Market\Models\CategorySteamResponseItemsItemAccountLinksItem::fromArray($item), $data['accountLinks']) : null,
            accountLink: $data['accountLink'] ?? null,
            emailLoginUrl: $data['emailLoginUrl'] ?? null,
            canChangePassword: $data['canChangePassword'] ?? null,
            itemOriginPhrase: $data['itemOriginPhrase'] ?? null,
            soldItemsCategoryCount: $data['sold_items_category_count'] ?? null,
            restoreItemsCategoryCount: $data['restore_items_category_count'] ?? null,
            tags: $data['tags'] ?? null,
            noteText: $data['note_text'] ?? null,
            hasPendingAutoBuy: $data['hasPendingAutoBuy'] ?? null,
            descriptionHtml: $data['descriptionHtml'] ?? null,
            descriptionEnHtml: $data['descriptionEnHtml'] ?? null,
            descriptionPlain: $data['descriptionPlain'] ?? null,
            descriptionEnPlain: $data['descriptionEnPlain'] ?? null,
            seller: isset($data['seller']) && is_array($data['seller']) && !empty($data['seller']) ? \Lolzteam\Generated\Market\Models\CategorySteamResponseItemsItemSeller::fromArray($data['seller']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'item_id' => $this->itemId,
            'item_state' => $this->itemState,
            'category_id' => $this->categoryId,
            'published_date' => $this->publishedDate,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'update_stat_date' => $this->updateStatDate,
            'refreshed_date' => $this->refreshedDate,
            'edit_date' => $this->editDate,
            'view_count' => $this->viewCount,
            'is_sticky' => $this->isSticky,
            'item_origin' => $this->itemOrigin,
            'extended_guarantee' => $this->extendedGuarantee,
            'nsb' => $this->nsb,
            'allow_ask_discount' => $this->allowAskDiscount,
            'title_en' => $this->titleEn,
            'description_en' => $this->descriptionEn,
            'email_type' => $this->emailType,
            'email_provider' => $this->emailProvider,
            'item_domain' => $this->itemDomain,
            'resale_item_origin' => $this->resaleItemOrigin,
            'steam_item_id' => $this->steamItemId,
            'steam_country' => $this->steamCountry,
            'steam_register_date' => $this->steamRegisterDate,
            'steam_last_activity' => $this->steamLastActivity,
            'steam_full_games' => $this->steamFullGames,
            'steam_community_ban' => $this->steamCommunityBan,
            'steam_bans' => $this->steamBans,
            'steam_cs2_profile_rank' => $this->steamCs2ProfileRank,
            'steam_balance' => $this->steamBalance,
            'steam_cs2_rank_id' => $this->steamCs2RankId,
            'steam_is_limited' => $this->steamIsLimited,
            'steam_level' => $this->steamLevel,
            'steam_friend_count' => $this->steamFriendCount,
            'steam_cs2_last_activity' => $this->steamCs2LastActivity,
            'steam_dota2_solo_mmr' => $this->steamDota2SoloMmr,
            'steam_cs2_ban_date' => $this->steamCs2BanDate,
            'steam_converted_balance' => $this->steamConvertedBalance,
            'steam_cards_count' => $this->steamCardsCount,
            'steam_cards_games' => $this->steamCardsGames,
            'steam_pubg_inv_value' => $this->steamPubgInvValue,
            'steam_cs2_inv_value' => $this->steamCs2InvValue,
            'steam_dota2_inv_value' => $this->steamDota2InvValue,
            'steam_tf2_inv_value' => $this->steamTf2InvValue,
            'steam_rust_inv_value' => $this->steamRustInvValue,
            'steam_cs2_wingman_rank_id' => $this->steamCs2WingmanRankId,
            'steam_game_count' => $this->steamGameCount,
            'steam_steam_inv_value' => $this->steamSteamInvValue,
            'steam_inv_value' => $this->steamInvValue,
            'steam_cs2_win_count' => $this->steamCs2WinCount,
            'steam_dota2_game_count' => $this->steamDota2GameCount,
            'steam_dota2_lose_count' => $this->steamDota2LoseCount,
            'steam_dota2_win_count' => $this->steamDota2WinCount,
            'steam_hours_played_recently' => $this->steamHoursPlayedRecently,
            'steam_faceit_level' => $this->steamFaceitLevel,
            'steam_points' => $this->steamPoints,
            'steam_last_transaction_date' => $this->steamLastTransactionDate,
            'steam_relevant_game_count' => $this->steamRelevantGameCount,
            'steam_gift_count' => $this->steamGiftCount,
            'steam_limit_spent' => $this->steamLimitSpent,
            'steam_dota2_behavior' => $this->steamDota2Behavior,
            'steam_mfa' => $this->steamMfa,
            'steam_market' => $this->steamMarket,
            'steam_market_restrictions' => $this->steamMarketRestrictions,
            'steam_market_ban_end_date' => $this->steamMarketBanEndDate,
            'steam_unturned_inv_value' => $this->steamUnturnedInvValue,
            'steam_cs2_last_launched' => $this->steamCs2LastLaunched,
            'steam_kf2_inv_value' => $this->steamKf2InvValue,
            'steam_dst_inv_value' => $this->steamDstInvValue,
            'steam_cs2_premier_elo' => $this->steamCs2PremierElo,
            'steam_has_activated_keys' => $this->steamHasActivatedKeys,
            'steam_cs2_ban_type' => $this->steamCs2BanType,
            'steam_rust_kill_player' => $this->steamRustKillPlayer,
            'steam_rust_deaths' => $this->steamRustDeaths,
            'steam_total_gifts_rub' => $this->steamTotalGiftsRub,
            'steam_total_refunds_rub' => $this->steamTotalRefundsRub,
            'steam_total_ingame_rub' => $this->steamTotalIngameRub,
            'steam_total_games_rub' => $this->steamTotalGamesRub,
            'steam_total_purchased_rub' => $this->steamTotalPurchasedRub,
            'steam_dota2_last_match_date' => $this->steamDota2LastMatchDate,
            'feedback_data' => $this->feedbackData,
            'isIgnored' => $this->isIgnored,
            'priceWithSellerFee' => $this->priceWithSellerFee,
            'guarantee' => $this->guarantee,
            'canViewLoginData' => $this->canViewLoginData,
            'canUpdateItemStats' => $this->canUpdateItemStats,
            'canReportItem' => $this->canReportItem,
            'canViewEmailLoginData' => $this->canViewEmailLoginData,
            'showGetEmailCodeButton' => $this->showGetEmailCodeButton,
            'canOpenItem' => $this->canOpenItem,
            'canCloseItem' => $this->canCloseItem,
            'canEditItem' => $this->canEditItem,
            'canDeleteItem' => $this->canDeleteItem,
            'canStickItem' => $this->canStickItem,
            'canUnstickItem' => $this->canUnstickItem,
            'bumpSettings' => $this->bumpSettings?->toArray(),
            'canBumpItem' => $this->canBumpItem,
            'canBuyItem' => $this->canBuyItem,
            'rub_price' => $this->rubPrice,
            'price_currency' => $this->priceCurrency,
            'canValidateAccount' => $this->canValidateAccount,
            'canResellItemAfterPurchase' => $this->canResellItemAfterPurchase,
            'steamData' => $this->steamData?->toArray(),
            'isSmallExf' => $this->isSmallExf,
            'account_last_activity' => $this->accountLastActivity,
            'hasCs2' => $this->hasCs2,
            'hasDota2' => $this->hasDota2,
            'hasPubg' => $this->hasPubg,
            'hasTf2' => $this->hasTf2,
            'hasRust' => $this->hasRust,
            'steam_cs2_ban_date_active' => $this->steamCs2BanDateActive,
            'dota2CalibrationWarning' => $this->dota2CalibrationWarning,
            'displayConvertedBalance' => $this->displayConvertedBalance,
            'inventoryValue' => $this->inventoryValue,
            'steamCs2Medals' => $this->steamCs2Medals,
            'cs2RankExpired' => $this->cs2RankExpired,
            'steamDota2WinRate' => $this->steamDota2WinRate,
            'steamTransactions' => $this->steamTransactions !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->steamTransactions) : null,
            'hasPossibleBanInDota2' => $this->hasPossibleBanInDota2,
            'chineseAccount' => $this->chineseAccount,
            'cs2MapsRanks' => $this->cs2MapsRanks,
            'cs2PremierElo' => $this->cs2PremierElo,
            'steamLifetimeTradeBan' => $this->steamLifetimeTradeBan,
            'canViewAccountLink' => $this->canViewAccountLink,
            'accountLinks' => $this->accountLinks !== null ? array_map(static fn($item) => $item instanceof \JsonSerializable ? $item->toArray() : $item, $this->accountLinks) : null,
            'accountLink' => $this->accountLink,
            'emailLoginUrl' => $this->emailLoginUrl,
            'canChangePassword' => $this->canChangePassword,
            'itemOriginPhrase' => $this->itemOriginPhrase,
            'sold_items_category_count' => $this->soldItemsCategoryCount,
            'restore_items_category_count' => $this->restoreItemsCategoryCount,
            'tags' => $this->tags,
            'note_text' => $this->noteText,
            'hasPendingAutoBuy' => $this->hasPendingAutoBuy,
            'descriptionHtml' => $this->descriptionHtml,
            'descriptionEnHtml' => $this->descriptionEnHtml,
            'descriptionPlain' => $this->descriptionPlain,
            'descriptionEnPlain' => $this->descriptionEnPlain,
            'seller' => $this->seller?->toArray(),
        ], static fn($v) => $v !== null);
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
