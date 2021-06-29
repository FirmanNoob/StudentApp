<template>
  <div class="chat-body" style="margin-top: 20px;">
    <div class="header">
      <strong>{{ user }}</strong>
      <small class="pull-right text-muted">
        <i class="lnr lnr-clock"></i>
        <i class="far fa-clock">2 min ago</i>
      </small>
    </div>
    <div class="chatcolor">
      <slot></slot>
    </div>
  </div>
</template>

<script>
export default {
  props: ["user"],
};
</script>