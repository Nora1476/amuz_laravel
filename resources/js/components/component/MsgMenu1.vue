<template>
    <!--메세지전송 -->
    <div class="message_con">
        <div class="messege_container">
            <!-- vue 컴포넌트 삽입 -->
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
