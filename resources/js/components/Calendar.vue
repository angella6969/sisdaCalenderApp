<template>
  <div>
    <div ref="calendar"></div>
  </div>
</template>

<script>
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';

export default {
  mounted() {
    const calendarEl = this.$refs.calendar;
    const calendar = new Calendar(calendarEl, {
      plugins: [dayGridPlugin],
      events: [
        // Masukkan acara-acara kalender di sini
        // Contoh: { title: 'Acara 1', start: '2023-05-01' }
      ],
    });
    calendar.render();
  },
};
</script>
