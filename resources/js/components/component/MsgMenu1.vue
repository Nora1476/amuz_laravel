<template>
    <div class="message_con">
        <div class="messege_container">
            <!-- SendTop vue 삽입 -->
            <SendTap></SendTap>
        </div>
    </div>
</template>

<script>
import SendTap from "../SendTap.vue";

export default {
    components: {
        SendTap,
    },
};
</script>
