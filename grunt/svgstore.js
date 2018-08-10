module.exports = {
    svgstore: {
          options: {
            prefix : "shape-",
            cleanup: true,
            svg: {
              style: "display: none;"
            }
          },
            files: {
              "includes/svg-defs.php": ["_dev/svg/*.svg"]
            }
        }
  }