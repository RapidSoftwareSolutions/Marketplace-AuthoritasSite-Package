[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/AuthoritasSite/functions?utm_source=RapidAPIGitHub_AuthoritasSiteFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# AuthoritasSite Package
AuthoritasSite
* Domain: authoritas.com
* Credentials: apiKey, apiSecret, apiSalt

## How to get credentials: 
1. Upgrade your account, send email to support to get apiKeys

## AuthoritasSite.addResellerClient
This method adds a new company to the Authoritas system as a child company of a reseller, and creates an admin user for the new company. 

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key obtained from Authoritas
| apiSalt    | credentials| Api salt obtained from Authoritas
| apiSecret  | credentials| Api seret obtained from Authoritas
| domain     | String     | Your domain
| companyName| String     | Name of the company
| email      | String     | Email address for the new admin user
| password   | String     | Password for the new admin user
| package    | String     | Pricing package for the new company

## AuthoritasSite.updateResellerClient
This method allows resellers to update details of one of their reseller client companies.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Api key obtained from Authoritas
| apiSalt       | credentials| Api salt obtained from Authoritas
| apiSecret     | credentials| Api seret obtained from Authoritas
| domain        | String     | Your domain
| companyId     | String     | Id of the company
| companyDetails| JSON       | JSON-encoded array of data to be updated. Currently supported keys are “name” (to upate the company name) and “package” (to update the pricing package of the company)

## AuthoritasSite.getResellerClients
This method gets a list of all the companies which are managed by the current partner.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Api key obtained from Authoritas
| apiSalt  | credentials| Api salt obtained from Authoritas
| apiSecret| credentials| Api seret obtained from Authoritas
| domain   | String     | Your domain

## AuthoritasSite.addSite
This method adds a new site to a company.

| Field              | Type       | Description
|--------------------|------------|----------
| apiKey             | credentials| Api key obtained from Authoritas
| apiSalt            | credentials| Api salt obtained from Authoritas
| apiSecret          | credentials| Api seret obtained from Authoritas
| domain             | String     | Your domain
| companyId          | String     | Id of the company
| url                | String     | Url of the site
| name               | String     | Name of the site
| targetMarket       | String     | The market this web site is targetting.
| primarySearchEngine| String     | The primary search engine to check keyword ranks on.
| jsonOptions        | JSON       | Optional JSON-formatted string with additional settings for the new site.

## AuthoritasSite.getSites
This method gets a list of all the sites this company is currently managing on Authoritas.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Api key obtained from Authoritas
| apiSalt  | credentials| Api salt obtained from Authoritas
| apiSecret| credentials| Api seret obtained from Authoritas
| domain   | String     | Your domain
| companyId| String     | Id of the company

## AuthoritasSite.addAffiliate
This method adds a new affiliate account to the Authoritas system.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Api key obtained from Authoritas
| apiSalt        | credentials| Api salt obtained from Authoritas
| apiSecret      | credentials| Api seret obtained from Authoritas
| domain         | String     | Your domain
| companyName    | String     | The name of the affiliate company
| email          | String     | The email address of the new affiliate user
| affiliateDomain| String     | The domain the site.instantAudit API requests will originate from

## AuthoritasSite.addUser
This method adds a new user to the Authoritas system.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Api key obtained from Authoritas
| apiSalt  | credentials| Api salt obtained from Authoritas
| apiSecret| credentials| Api seret obtained from Authoritas
| domain   | String     | Your domain
| companyId| String     | The unique ID of the company this user will belong to
| email    | String     | The email address of the user to be added
| language | String     | The two-character ISO code of the default language for the new user. See ISO Language Codes for valid language codes.

## AuthoritasSite.getUsers
This method gets a list of all user accounts belonging to the specified company.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Api key obtained from Authoritas
| apiSalt  | credentials| Api salt obtained from Authoritas
| apiSecret| credentials| Api seret obtained from Authoritas
| domain   | String     | Your domain
| companyId| String     | Id of the company

## AuthoritasSite.instantAudit
This function performs an instant audit on the specified site using a sample search phrase to check the rank for this site and the competitors for this search phrase.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key obtained from Authoritas
| apiSalt    | credentials| Api salt obtained from Authoritas
| apiSecret  | credentials| Api seret obtained from Authoritas
| domain     | String     | Your domain
| url        | String     | Url of the site
| keyword    | String     | The main search phrase for this site
| competitor1| String     | The URL of the first competitor. An empty string will result in a ‘guessed’ competitor based on other domains in search results for the specified keyword
| competitor2| String     | The URL of the second competitor. An empty string will result in a ‘guessed’ competitor based on other domains in search results for the specified keyword
| jsonOptions| JSON       | An optional JSON formatted string with additional options.

## AuthoritasSite.suggestKeywords
This function will suggest keywords for a site by analysing the home page of the web site and the home page of any competitors which have been set for this site, or analysing all the crawled pages if we have crawled the sites. 

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Api key obtained from Authoritas
| apiSalt  | credentials| Api salt obtained from Authoritas
| apiSecret| credentials| Api seret obtained from Authoritas
| domain   | String     | Your domain
| url      | String     | The url of the site to be analysed

## AuthoritasSite.suggestCompetitors
This function will suggest competitors for a site by analysing the home page of the web site and the home page of any competitors which have been set for this site.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Api key obtained from Authoritas
| apiSalt  | credentials| Api salt obtained from Authoritas
| apiSecret| credentials| Api seret obtained from Authoritas
| domain   | String     | Your domain
| url      | String     | The url of the site to be analysed
| keyword  | String     | The keyword to suggest competitors on
| country  | String     | This is a country code used to determine the search engine to use when looking for competitors.The default is ‘gb’.

## AuthoritasSite.updateKeywords
This function will update the keywords for a specific campaign on a site.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Api key obtained from Authoritas
| apiSalt     | credentials| Api salt obtained from Authoritas
| apiSecret   | credentials| Api seret obtained from Authoritas
| domain      | String     | Your domain
| url         | String     | The url of the site to be added or updated
| keywords    | Array      | An array of keywords
| campaignId  | Number     | The campaign ID to modify keywords on
| monitor     | Boolean    | Should the passed keywords be monitored
| operation   | String     | “add”, “update” or “delete”
| keywordGroup| String     | The name of the keyword group these keywords belong to. If not supplied or blank, this will default to “api”

## AuthoritasSite.updateSite
This function will update a site, or add it if it doesn’t already exist on the database. 

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key obtained from Authoritas
| apiSalt    | credentials| Api salt obtained from Authoritas
| apiSecret  | credentials| Api seret obtained from Authoritas
| domain     | String     | Your domain
| url        | String     | The url of the site to be added or updated
| keywords   | Array      | An array of up to 10 keywords
| competitors| Array      | An array of up to 5 competitor URLs
| monitor    | Boolean    | Indicate whether to continue monitoring this site. Used to disable monitoring for a site if they cancel their account.
| jsonOptions| JSON       | An optional JSON formatted string with additional options.

## AuthoritasSite.getSiteData
This function will return all the data we have about a site.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Api key obtained from Authoritas
| apiSalt     | credentials| Api salt obtained from Authoritas
| apiSecret   | credentials| Api seret obtained from Authoritas
| domain      | String     | Your domain
| url         | String     | The url of the site to be added or updated
| previousDate| String     | The date of the previous GetSiteData request. This date will be used to calculate new and lost links. The date should be in ISO date format (yyyy-mm-dd).
| campaignId  | Number     | The campaign ID to be reported on. Optional – if not supplied (or zero) this will default to the first campaign on the site.
| dataLimits  | JSON       | JSON-formatted array of optional parameters to limit the number of results returned of each data type.
| dataDate    | String     | Date to get data for, in ISO date format (yyyy-mm-dd).

## AuthoritasSite.getOrganicKeywordsRankingByPeriod
This function will retrieve from our database all organic keywords ranking (for all search engines setup) for the given site, campaign and period

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key obtained from Authoritas
| apiSalt    | credentials| Api salt obtained from Authoritas
| apiSecret  | credentials| Api seret obtained from Authoritas
| domain     | String     | Your domain
| siteId     | Number     | The id of the desired site in our database
| campaignId | Number     | The id of the desired campaign in our database
| period     | String     | The desired period (1day, 7days, 30days, lastmonth, 3months, 6months,  2016,  2015, wholecampaign)
| offset     | Number     | The offset of the keywords ranking in our database
| limit      | Number     | Limit the number of returned keywords (max. value is 350)
| domainAlias| Boolean    | Active or disabled domain alias functionality. (This is only available for enterprise packages)

## AuthoritasSite.getOrganicKeywordsRankingByDate
This function will retrieve from our database all organic keywords ranking (for all search engines setup) for the given site, campaign and date

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key obtained from Authoritas
| apiSalt    | credentials| Api salt obtained from Authoritas
| apiSecret  | credentials| Api seret obtained from Authoritas
| domain     | String     | Your domain
| siteId     | Number     | The id of the desired site in our database
| campaignId | Number     | The id of the desired campaign in our database
| date       | String     | The desired date (format yyyy-mm-dd)
| offset     | Number     | The offset of the keywords ranking in our database
| limit      | Number     | Limit the number of returned keywords (max. value is 350)
| domainAlias| Boolean    | Active or disabled domain alias functionality. (This is only available for enterprise packages)

## AuthoritasSite.getUniversalKeywordsRanking
This function will retrieve from our database all universal keywords ranking for the given site and campaign.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key obtained from Authoritas
| apiSalt   | credentials| Api salt obtained from Authoritas
| apiSecret | credentials| Api seret obtained from Authoritas
| domain    | String     | Your domain
| siteId    | Number     | The id of the desired site in our database
| campaignId| Number     | The id of the desired campaign in our database
| offset    | Number     | The offset of the keywords ranking in our database
| limit     | Number     | Limit the number of returned keywords (max. value is 350)

## AuthoritasSite.getKeywordsGroups
This function will retrieve from our database all the keywords groups defined for a specific site and campaign

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key obtained from Authoritas
| apiSalt   | credentials| Api salt obtained from Authoritas
| apiSecret | credentials| Api seret obtained from Authoritas
| domain    | String     | Your domain
| siteId    | Number     | The id of the desired site in our database
| campaignId| Number     | The id of the desired campaign in our database

## AuthoritasSite.getCategories
This function will retrieve from our database all the categories defined for a specific site and campaign

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key obtained from Authoritas
| apiSalt   | credentials| Api salt obtained from Authoritas
| apiSecret | credentials| Api seret obtained from Authoritas
| domain    | String     | Your domain
| siteId    | Number     | The id of the desired site in our database
| campaignId| Number     | The id of the desired campaign in our database

## AuthoritasSite.getMarketVisibility
This function will retrieve from our database all the market visibility data available for a specific site ,campaign and date

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Api key obtained from Authoritas
| apiSalt       | credentials| Api salt obtained from Authoritas
| apiSecret     | credentials| Api seret obtained from Authoritas
| domain        | String     | Your domain
| siteId        | Number     | The id of the desired site in our database
| campaignId    | Number     | The id of the desired campaign in our database
| date          | String     | The desired date (format yyyy-mm-dd)
| keywordGroupId| String     | The id of the desired keyword group (-1: All keywords groups, 0: Un-grouped)
| categoryId    | String     | The id of the desired category (-1: All categories)

