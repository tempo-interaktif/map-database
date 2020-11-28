const margin = { top: 30, right: 30, bottom: 30, left: 30 },
    width = 1000 - margin.left - margin.right,
    height = 550 - margin.top - margin.bottom;

  const svg = d3.select('#map-container')
    .append('svg')
    .attr('width', width + margin.left + margin.top)
    .attr('height', height + margin.top + margin.bottom)
    .append('g')
    .attr('transform', `translate(-55,1200)rotate(273)scale(2)`);
  function ready(geo, userData) {
  // Container SVG.

  // Projection and path.
  const projection = d3.geoAlbers().fitSize([width, height], geo);
  const geoPath = d3.geoPath().projection(projection);

  // Prep user data.
  userData.forEach(site => {
    const coords = projection([+site.lng, +site.lat]);
    site.x = coords[0];
    site.y = coords[1];
  });

  // Create a hexgrid generator.
  const hexgrid = d3.hexgrid()
    .extent([width, height])
    .geography(geo)
    .pathGenerator(geoPath)
    .projection(projection)
    .hexRadius(3.7);

  // Instantiate the generator.
  const hex = hexgrid(userData);

  // Draw the hexes.
  var num = 1100
  var id ,user;
  svg
    .append('g')
    .attr('id','gindonesia')
    .selectAll('path')
    .data(hex.grid.layout)
    .enter()
    .append('path')
    .attr('d', hex.hexagon())
    .attr('class', 'hexagon')
    .attr('id', function(d) {num = num+1;return num})
    .attr('transform', d => `translate(${d.x} ${d.y})`)
    .style('fill','rgb(253, 231, 37)')
    .style('stroke', '#F4EB9F')
    .on('mouseenter', function(d) {
      d3.select(this).transition().style('fill', 'red')
    })
    .on('mouseout', function() {
      d3.select(this).transition().style('fill', 'rgb(253, 231, 37)')
    })
    .on('click', function(d) {
      id = d3.select(this).attr('id');
      user = userData.filter(function(data) {
        return data.id == id;
      });
      if (user.length != 0) {
        klikPulau(user[0].province_id)
      }
    });
}

// Data load.
const geoData = d3.json(
  'indonesia.json'
);
const points = d3.json( 
  'kab.json'
);

Promise.all([geoData, points]).then(res => {
  let [geoData, userData] = res;
  ready(geoData, userData);
});