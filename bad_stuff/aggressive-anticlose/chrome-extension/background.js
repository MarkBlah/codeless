
chrome.browserAction.onClicked.addListener(function (tab) {
    chrome.tabs.create({ 'url': 'chrome://settings/', 'selected': true }, function (tab) {
    });
});


