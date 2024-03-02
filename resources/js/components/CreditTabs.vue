<script>
import CreditMenu1 from "./component/CreditMenu1.vue";
import CreditMenu2 from "./component/CreditMenu2.vue";

export default {
    components: {
        CreditMenu1,
        CreditMenu2,
    },
    mounted() {
        console.log("Component mounted.");
    },
    data() {
        return {
            currentTab: "크레딧 구매",
            tabs: [
                { name: "크레딧 구매", component: CreditMenu1 },
                { name: "크레딧 내역", component: CreditMenu2 },
            ],
        };
    },
    computed: {
        currentTabComponent() {
            const tab = this.tabs.find((tab) => tab.name === this.currentTab);
            return tab ? tab.component : null;
        },
    },
};
</script>

<template>
    <div class="sub_nav">
        <ul>
            <li
                v-for="(tab, index) in tabs"
                :key="index"
                @click="currentTab = tab.name"
                :class="{
                    'sub_nav-menu': true,
                    active: currentTab === tab.name,
                }"
            >
                {{ tab.name }}
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <component :is="currentTabComponent"></component>
    </div>
</template>
