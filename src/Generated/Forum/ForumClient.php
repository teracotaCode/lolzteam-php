<?php

declare(strict_types=1);

namespace Lolzteam\Generated\Forum;

/**
 * Forum API Client.
 *
 * Auto-generated from OpenAPI specification.
 */
class ForumClient
{
    public readonly AuthenticationApi $authentication;
    public readonly AssetsApi $assets;
    public readonly CategoriesApi $categories;
    public readonly ForumsApi $forums;
    public readonly LinkForumsApi $linkForums;
    public readonly PagesApi $pages;
    public readonly NavigationApi $navigation;
    public readonly ThreadsApi $threads;
    public readonly PostsApi $posts;
    public readonly PostCommentsApi $postComments;
    public readonly UsersApi $users;
    public readonly ProfilePostsApi $profilePosts;
    public readonly ProfilePostCommentsApi $profilePostComments;
    public readonly ConversationsApi $conversations;
    public readonly NotificationsApi $notifications;
    public readonly ContentTaggingApi $contentTagging;
    public readonly SearchingApi $searching;
    public readonly BatchRequestsApi $batchRequests;
    public readonly ChatboxApi $chatbox;
    public readonly FormsApi $forms;

    public function __construct(
        private readonly \Lolzteam\Runtime\HttpClientInterface $httpClient,
    ) {
        $this->authentication = new AuthenticationApi($this->httpClient);
        $this->assets = new AssetsApi($this->httpClient);
        $this->categories = new CategoriesApi($this->httpClient);
        $this->forums = new ForumsApi($this->httpClient);
        $this->linkForums = new LinkForumsApi($this->httpClient);
        $this->pages = new PagesApi($this->httpClient);
        $this->navigation = new NavigationApi($this->httpClient);
        $this->threads = new ThreadsApi($this->httpClient);
        $this->posts = new PostsApi($this->httpClient);
        $this->postComments = new PostCommentsApi($this->httpClient);
        $this->users = new UsersApi($this->httpClient);
        $this->profilePosts = new ProfilePostsApi($this->httpClient);
        $this->profilePostComments = new ProfilePostCommentsApi($this->httpClient);
        $this->conversations = new ConversationsApi($this->httpClient);
        $this->notifications = new NotificationsApi($this->httpClient);
        $this->contentTagging = new ContentTaggingApi($this->httpClient);
        $this->searching = new SearchingApi($this->httpClient);
        $this->batchRequests = new BatchRequestsApi($this->httpClient);
        $this->chatbox = new ChatboxApi($this->httpClient);
        $this->forms = new FormsApi($this->httpClient);
    }
}
