/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
var __importDefault=this&&this.__importDefault||function(e){return e&&e.__esModule?e:{default:e}};define(["require","exports","jquery","TYPO3/CMS/Core/Ajax/AjaxRequest","TYPO3/CMS/Backend/ModuleMenu","TYPO3/CMS/Backend/Viewport","TYPO3/CMS/Core/Event/RegularEvent"],(function(e,t,a,o,r,s,n){"use strict";var c,l;a=__importDefault(a),function(e){e.containerSelector="#typo3-cms-workspaces-backend-toolbaritems-workspaceselectortoolbaritem",e.activeMenuItemLinkSelector=".dropdown-menu .selected",e.menuItemSelector=".t3js-workspace-item",e.menuItemLinkSelector=".t3js-workspaces-switchlink",e.toolbarItemSelector=".dropdown-toggle",e.workspaceModuleLinkSelector=".t3js-workspaces-modulelink"}(c||(c={})),function(e){e.workspaceBodyClass="typo3-in-workspace",e.workspacesTitleInToolbarClass="toolbar-item-name"}(l||(l={}));class i{static refreshPageTree(){s.NavigationContainer&&s.NavigationContainer.PageTree&&s.NavigationContainer.PageTree.refreshTree()}static updateWorkspaceState(){const e=document.querySelector(c.containerSelector+" .t3js-workspace-item.selected .t3js-workspaces-switchlink");if(null!==e){const t=parseInt(e.dataset.workspaceid,10),a=e.innerText.trim();top.TYPO3.configuration.inWorkspace=0!==t,top.TYPO3.Backend.workspaceTitle=top.TYPO3.configuration.inWorkspace?a:""}}static updateTopBar(e){if(a.default("."+l.workspacesTitleInToolbarClass,c.containerSelector).remove(),e&&e.length){let t=a.default("<span>",{class:l.workspacesTitleInToolbarClass}).text(e);a.default(c.toolbarItemSelector,c.containerSelector).append(t)}}static updateBackendContext(){let e="";i.updateWorkspaceState(),TYPO3.configuration.inWorkspace?(a.default("body").addClass(l.workspaceBodyClass),e=top.TYPO3.Backend.workspaceTitle||TYPO3.lang["Workspaces.workspaceTitle"]):a.default("body").removeClass(l.workspaceBodyClass),i.updateTopBar(e)}constructor(){s.Topbar.Toolbar.registerEvent(()=>{this.initializeEvents(),i.updateBackendContext()}),new n("typo3:datahandler:process",e=>{const t=e.detail.payload;"sys_workspace"===t.table&&"delete"===t.action&&!1===t.hasErrors&&s.Topbar.refresh()}).bindTo(document)}performWorkspaceSwitch(e){a.default(c.activeMenuItemLinkSelector+" i",c.containerSelector).removeClass("fa fa-check").addClass("fa fa-empty-empty"),a.default(c.activeMenuItemLinkSelector,c.containerSelector).removeClass("selected");const t=a.default(c.menuItemLinkSelector+"[data-workspaceid="+e+"]",c.containerSelector).closest(c.menuItemSelector);t.find("i").removeClass("fa fa-empty-empty").addClass("fa fa-check"),t.addClass("selected"),i.updateBackendContext()}initializeEvents(){a.default(c.containerSelector).on("click",c.workspaceModuleLinkSelector,e=>{e.preventDefault(),r.App.showModule(e.currentTarget.dataset.module)}),a.default(c.containerSelector).on("click",c.menuItemLinkSelector,e=>{e.preventDefault(),this.switchWorkspace(parseInt(e.currentTarget.dataset.workspaceid,10))})}switchWorkspace(e){new o(TYPO3.settings.ajaxUrls.workspace_switch).post({workspaceId:e,pageId:top.fsMod.recentIds.web}).then(async t=>{const a=await t.resolve();if(a.workspaceId||(a.workspaceId=0),this.performWorkspaceSwitch(parseInt(a.workspaceId,10)),a.pageId){top.fsMod.recentIds.web=a.pageId;let e=TYPO3.Backend.ContentContainer.getUrl();e+=(e.includes("?")?"&":"?")+"&id="+a.pageId,i.refreshPageTree(),s.ContentContainer.setUrl(e)}else top.currentModuleLoaded.startsWith("web_")?(i.refreshPageTree(),"web_WorkspacesWorkspaces"===top.currentModuleLoaded?r.App.showModule(top.currentModuleLoaded,"workspace="+e):r.App.reloadFrames()):TYPO3.configuration.pageModule&&r.App.showModule(TYPO3.configuration.pageModule);r.App.refreshMenu()})}}const p=new i;return TYPO3.WorkspacesMenu=p,p}));